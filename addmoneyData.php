<?php
$connect = mysqli_connect("localhost", "root", "", "cabapp");
session_start();
$userId = $_SESSION["userId"];
$fullName=$_SESSION["fullName"] ;

$amount=$_POST['amount'];

$sql="UPDATE users SET walletBalance = walletBalance + '$amount' WHERE id=$userId";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Successfully added money to the wallet";
  
mysqli_close($connect);
?>