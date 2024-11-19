<?php
// cart_data.php
$servername = "localhost";
$username = "your_username"; 
$password = "your_password"; 
$dbname = "cris"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM carrito";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["producto"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "<td>" . $row["subtotal"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No products in the cart.</td></tr>";
}

$conn->close();
?>