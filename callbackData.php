<?php

$connect = mysqli_connect("localhost", "root", "", "cabapp");
session_start();
$userId = $_SESSION["userId"];
$fullName=$_SESSION["fullName"] ;

$phoneNumber=$_POST['phoneNumber'];

$sql="INSERT INTO callback (name,phoneNumber) 
VALUES('$fullName','$phoneNumber')";
if (!mysqli_query($connect, $sql)) {
	die('Error: ' . mysqli_error($connect));
} echo "HANG ON!! We will call you ASAP.";

?>