<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$pickupSelected = $_POST["pickupSelected"];
$dropSelected = $_POST["dropSelected"];


$sql = "SELECT * FROM distance where startLocation = '$pickupSelected' and endLocation = '$dropSelected'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $price =$row['price'];
        echo " ".$price;
	}
}else {
    echo " none";
}
$conn->close();

?>