<?php
if (isset($_GET["id_timef"])) {
    $id = $_GET["id_timef"];
  //   $_SESSION["id_phimtt"] = $id;

}
session_start();    
include("connectDB.php");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bookedSeats = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["seats"])) {
        $selectedSeats = $_POST["seats"];

        // Insert selected seats into the database
        foreach ($selectedSeats as $seat) {
            // Check if the seat is not already booked before inserting
            if (!in_array($seat, $bookedSeats)) {
                $sql = "INSERT INTO booked_seats (seat_id, id_timef) VALUES ('$seat','$id')";
                $conn->query($sql);
                // Update $bookedSeats array after successful insertion
                $bookedSeats[] = $seat;
            }
        }
    }
}

// Retrieve booked seats from the database
$sql = "SELECT seat_id FROM booked_seats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookedSeats[] = $row['seat_id'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content remains unchanged -->
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.seats {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-content: stretch;
    align-items: center;
}

.row {
    display: flex;
    margin: 5px;
}

.seat {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 5px;
    text-align: center;
}

.selected-seat {
    background-color: #4CAF50;
    color: white;
}

.booked-seat {
    background-color: #FF5733;
}

#button {
    margin-top: 10px;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

</style>
<body>
    <?php include("menu.php"); ?>

    <form method="POST" id="chair">
        <div class="seats">
            <?php
            $rows = 7;
            $columns = 7;
            $seatNumber = 1;

            for ($row = 1; $row <= $rows; $row++) {
                echo '<div class="row">';
                for ($col = 1; $col <= $columns; $col++) {
                    $seatId = "A" . $row . $col;
                    $isBooked = in_array($seatId, $bookedSeats);
                    $isChecked = $isBooked ? 'checked' : '';
                    
                    echo '<div class="seat' . ($isBooked ? ' booked-seat' : '') . '" id="' . $seatId . '">
                            <input type="checkbox" name="seats[]" value="' . $seatId . '" style="display: none;" ' . ($isBooked ? 'disabled' : $isChecked) . '>
                            <label for="' . $seatId . '">' . $seatId . '</label>
                          </div>';
                    $seatNumber++;
                }
                echo '</div>';
                
            }
            echo '<input type="submit" value="ĐẶT GHẾ" id="button">';
            ?>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".seat").click(function () {
                if ($(this).hasClass('booked-seat')) {
                    alert('This seat is already booked.');
                    return false;
                }

                var checkbox = $(this).find('input[type="checkbox"]');
                if (!checkbox.prop('disabled')) {
                    checkbox.prop('checked', !checkbox.prop('checked'));
                    $(this).toggleClass('selected-seat');
                }
            });

            $("#chair").submit(function (event) {
                // Your AJAX logic to handle form submission
            });
        });
    </script>

    <?php include("footer.php"); ?>
</body>

</html>
