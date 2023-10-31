<?php

$connect = mysqli_connect("localhost", "root", "", "cabapp");

session_start();
$userId = $_SESSION["userId"];
$fullName = $_SESSION["fullName"];


$pickupSelected = $_POST["pickupSelected"];
$dropSelected = $_POST["dropSelected"];
$time=$_POST["time"];
$price=$_POST["price"];
$distance=$_POST["distance"];
$pickupTime = date("Y-m-d h:i:s:A",strtotime($time));
$walletBalance = $_POST['walletBalance'];

$qer=mysqli_query($connect,"SELECT * FROM driver WHERE isBooked = 0 ORDER BY rand() LIMIT 1");

	if ( mysqli_num_rows($qer) > 0) {

		while($res=mysqli_fetch_assoc($qer)) {

			$driverId = $res['driver_id'];
			$driverFullName = $res['fullName'];
			$driverPhone = $res['phone'];
		}

		if ($price <= $walletBalance) {

		$sql0="UPDATE driver SET isBooked = 1 WHERE driver_id=$driverId";
		if (!mysqli_query($connect, $sql0)) {
			die('Error: ' . mysqli_error($connect));
		}


		$sql="INSERT INTO booking (userId,fullName,startLocation,endLocation,price,distance,pickupTime,assignedDriverId,driverFullName,driverPhone) 
		VALUES('$userId','$fullName','$pickupSelected','$dropSelected','$price','$distance','$pickupTime','$driverId','$driverFullName','$driverPhone')";
		if (!mysqli_query($connect, $sql)) {
			die('Error: ' . mysqli_error($connect));
		}

		$sql1="UPDATE users SET walletBalance = walletBalance - '$price' WHERE id=$userId";
		if (!mysqli_query($connect, $sql1)) {
			die('Error: ' . mysqli_error($connect));
		}echo "BOOKED";

		mysqli_close($connect);

	}else{
		echo "Insufficiant Wallet Balance. Please Add money to your wallet first!";
	}
		
	}else{
		echo "Its not you its us, Sorry no drivers are available now 😔";
	}



?>