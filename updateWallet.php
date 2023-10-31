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
$userId = $_SESSION["userId"];


$sql = "SELECT * FROM users where id = $userId ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $newBalance =$row["walletBalance"];
        echo $newBalance;
	}
}else {
    echo "0";
}
$conn->close();

?>