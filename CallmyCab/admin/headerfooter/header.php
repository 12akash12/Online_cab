<!DOCTYPE html>
<?php
	$con = mysqli_connect("localhost","root","","cabapp");
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="../fonts\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">	
	<script src="css/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="left-body">
		<div class="lb-header">Cab App Admin</div>
		<div class="user-panel">
			<div class="user-img">
				<img src="images/user.gif" class="img-circle">
			</div>
			<div class="user-info">
				<p>Admin</p>
				<i class="fa fa-circle"></i>Online
			</div>
		</div>
		<nav class="lft-menu">
			<ul class="sidebar-menu">
				<li class="treeview">
					<a href="">
						<i class="fa fa-dashboard"></i>
						<span>User Management</span>
						<!--<i class="fa fa-angle-left pull-right"></i>-->
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="userlist.php">
								<span>View all</span>
							</a>
						</li>
						<li>
							<a href="adduser.php">
								<span>Add new</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="bookingdetails.php">
						<i class="fa fa-files-o"></i>
						<span>View Booking Details</span>
					</a>
				</li>
				<!--<li class="treeview">
					<a href="">
						<i class="fa fa-th"></i>
						<span>Promocode Management</span>
					</a>
				</li>
				<li class="treeview">
					<a href="">
						<i class="fa fa-car"></i>
						<span>Car</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="">
								<span>View all</span>
							</a>
						</li>
						<li>
							<a href="">
								<span>Add new</span>
							</a>
						</li>
					</ul>
				</li>-->
				<li class="treeview">
					<a href="">
						<i class="fa fa-empire"></i>
						<span>Driver Management</span>
						<!--<i class="fa fa-angle-left pull-right"></i>-->
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="driverlist.php">
								<span>View all</span>
							</a>
						</li>
						<li>
							<a href="adddriver.php">
								<span>Add new</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="backenduser.php">
						<i class="fa fa-toggle-on"></i>
						<span>Backend User</span>
					</a>
				</li>
				<li class="treeview">
					<a href="wallet_list.php">
						<i class="fa fa-money"></i>
						<span>Wallet</span>
					</a>
				</li>
				<li class="treeview">
					<a href="callback.php">
						<i class="fa fa-google-wallet"></i>
						<span>Callback</span>
					</a>
				</li>
				<li class="treeview">
					<a href="change_passkey.php">
						<i class="fa fa-wrench"></i>
						<span>Settings</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="right-body">
		<div class="rb-header">
			<!--<p></p>
			<p></p>
			<p></p>-->
		</div>
		<div class="rb-body">
			