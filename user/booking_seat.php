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
    border-radius: 20px;
    background-color: #343541;
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
#screen{
width: 400px;
}
</style>

<body>
    <?php

        include("menu.php");
        
        if(!isset($_SESSION["fullname"])){
            echo "<script>alert('Vui lòng đăng nhập');</script>";
            echo "<script>window.location.href = './login.php';</script>";
         }
    if (isset($_GET["id_timef"])) {
        $id = $_GET["id_timef"];
        
    }
    $_SESSION["id_timef"] =$id;
    include("connectDB.php");?>

<nav style="display: flex; flex-direction: column; align-items: center; background-image: url('../Image/datchongoi.png');background-color:#131E28;
            background-position: center;
            background-repeat: no-repeat;">
<img id="screen"  src="http://www.webstrot.com/html/moviepro/html/images/content/screen.png" alt="movie">
    <form method="POST" action="thucan.php" id="chair">

        <div class="seats">
            <?php
            
            $sql = "SELECT seat_id FROM booked_seats WHERE id_timef = $id ";
            $result = $conn->query($sql);
            
            $bookedSeats = [];
            // unset($_SESSION['bookedset']);
            // $_SESSION['bookedset'] = $bookedSeats;
            if ($result->num_rows > 0) {
                // Lặp qua kết quả và lưu vào mảng $bookedSeats
                while ($row = $result->fetch_assoc()) {
                    $bookedSeats[] = $row['seat_id'];
                }
            }
            // var_dump( $bookedSeats );
        //    $bookedSeats = [];
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
                            <label style ="color: white; " for="' . $seatId . '">' . $seatId . '</label>
                          </div>';
                    $seatNumber++;
                }
                echo '</div>';
                
            }
            // echo '<a href="./booking_seat.php?id_timef='.$row['id_timef'].'"><li class="showtime">' . $timeRow["time"] . '</li></a>';

            echo '<input type="submit" value="ĐẶT GHẾ" id="button">';

            ?>
        </div>

    </form>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $(".seat").click(function() {
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

    
    });
    </script>

    <?php include("footer.php"); ?>
</body>

</html>