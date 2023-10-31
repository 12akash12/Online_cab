<?php 
include 'header/header.php'; 

if(isset($_POST['login']))
{
	session_start();
	$username=$_POST['username'];
	$password=$_POST['pass'];
	
	$con=mysqli_connect("localhost","root","","cabapp");
	$qer=mysqli_query($con,"select * from users where username='$username' and password='$password'");
	if(mysqli_num_rows($qer)==1)
	{

		while($res = mysqli_fetch_assoc($qer))
		{
			$isAdmin = $res['isAdmin'];
			$isBan = $res['isBan'];
			$userId = $res['id'];
			$fullName = $res['fullName'];
			$walletBalance = $res['walletBalance'];
		}
		if ($isBan == 1) {

			echo "<script>alert('YOU ARE BANNED BY ADMIN! CREATE A NEW ACCOUNT.');</script>";
			echo "<script>window.location.href='register.php';</script>";
		}
		else if ($isAdmin == 1){

			$_SESSION["userId"] = $userId;
			$_SESSION["username"] = $username;
			$_SESSION["isAdmin"]=$isAdmin;

			echo "<script>window.location.href='Callmycab/admin/dashboard.php';</script>";
			exit;
		}
		else{
			$_SESSION["userId"] = $userId;
			$_SESSION["fullName"] = $fullName;
			$_SESSION["walletBalance"] = $walletBalance;
			echo "<script>window.location.href='index.php';</script>";

		}
		
	}
	else
	{
		echo "<script>alert('unsuccessfull login');</script>";
	}
}
?>

<div class="limiter">
	<div class="container-login100">
		<div class="login100-more" style="background-image: url('images/back.jpg');"></div>
		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			<form class="login100-form validate-form" id="showLogForm" method="POST">
				<span class="login100-form-title p-b-59" id="loginSpan">
					Login
				</span>

				<div class="wrap-input100 validate-input" data-validate="Username is required">
					<span class="label-input100">Username</span>
					<input class="input100" type="text" name="username" placeholder="Username...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="pass" placeholder="*************">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<a href="register.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" id="showReg">
						Sign Up
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
include 'footer/footer.php'; 	
?>