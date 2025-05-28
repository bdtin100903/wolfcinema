<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../CSS./thucan.css">
       <script src="https://kit.fontawesome.com/d69fb28507.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background-color:#131E28;">
<?php

include("menu.php");
if(!isset($_SESSION["fullname"])){
    echo "<script>alert('Vui lòng đăng nhập');</script>";
    echo "<script>window.location.href = './login.php';</script>";
 }
 else if(!isset($_SESSION["id_film"])){
    echo "<script>alert('Vui lòng đặt vé');</script>";
    echo "<script>window.location.href = './index.php';</script>";
 }

include("connectDB.php");
$bookedSeats = [];
$id_timef = $_SESSION["id_timef"];



$sql = "SELECT * FROM booked_seats";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $bookedSeats[] = $row['seat_id'];
//     }
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["seats"])) {
        $selectedSeats = $_POST["seats"];
        $_SESSION['$selectedSeats'] = $selectedSeats;
        // Insert selected seats into the database
        foreach ($selectedSeats as $seat) {
            // Truy vấn INSERT
            // $escapedValue = $conn->real_escape_string($seat);
            // $sqlInsert = "INSERT INTO `booked_seats` (`id_timef`, `seat_id`) VALUES ('$id_timef', '$escapedValue')";
            // $conn->query($sqlInsert);
            // Check if the seat is not already booked before inserting
            if (!in_array($seat, $bookedSeats)) {
                // Update $bookedSeats array after successful insertion
                $bookedSeats[] = $seat;
                $_SESSION["sl-seated"] = count($bookedSeats);
                $seatsString = implode(", ", $bookedSeats);
                $_SESSION["seated"] =  $seatsString;
                
        
                
        }
    }
}


}

?>

    <form action="thanhtoan1.php" method="post" style="display: flex;
    flex-direction: column;
    align-items: center;" >
    <section class="shop-content">
    
            <?php

            $sql = "SELECT id, namefood, pricefood FROM thucan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-box">';
                    echo '<img src="../Image./img_thucan./bap.jpg" alt="" class="product-img">';
                    echo '<h2 class="product-title">' . htmlspecialchars($row["namefood"]) . '</h2>';
                        echo '<div style="
                        display: flex;
                        flex-direction: row;
                        align-content: center;
                        justify-content: space-around;
                        margin: 6px;
                    ">';
                        echo '<span class="price" data-product-price="' . $row["pricefood"] . '">' . $row["pricefood"] . 'VNĐ</span>';
                        echo '<input style="
                        width: 90px" id="quantity" type="number" class="quantity" min="0" value="1">';
                        echo '</div>';
                    echo '<button type="button" onclick="addToCart(' . $row["id"] . ', \'' . htmlspecialchars($row["namefood"]) . '\', ' . $row["pricefood"] . ')" class="add-to-cart-btn">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            ?>
       </div>

        <input type="hidden" name="cart" id="cart" value="">
       
        </section>
        <button type="button" onclick="submitCart()">Tiếp Tục Thanh Toán</button>

    </form>

    <script>
        let cart = [];

        function addToCart(productId, productName, productPrice) {
            let quantity = parseInt(document.getElementById('quantity').value);
    console.log('Quantity:', quantity);

    let existingProductIndex = cart.findIndex(item => item.id === productId);

    if (existingProductIndex !== -1) {
        cart[existingProductIndex].quantity += quantity;
    } else {
        cart.push({
            id: productId,
            name: productName,
            price: productPrice,
            quantity: quantity
        });
    }

    document.getElementById('cart').value = JSON.stringify(cart);

    alert(`Added ${quantity} ${productName}(s) to cart.`);

    console.log(cart);
}

function submitCart() {
    document.getElementById('cart').value = JSON.stringify(cart);
    document.querySelector('form').submit();
}


//Xu li luu session 
<?php

?>
    </script>
</body>
</html>
