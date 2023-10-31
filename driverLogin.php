<?php 
include 'header/header.php'; 

if(isset($_POST['login']))
{
	session_start();
	$username=$_POST['username'];
	$password=$_POST['pass'];
	
	$con=mysqli_connect("localhost","root","","cabapp");
	$qer=mysqli_query($con,"select * from driver where username='$username' and password='$password'");
	if(mysqli_num_rows($qer)==1)
	{
		while($res = mysqli_fetch_assoc($qer))
		{	
			$driverId = $res['driver_id'];
			$_SESSION['user'] = $driverId;
			echo "<script>window.location.href='Callmycab/driveracc.php';</script>";
			
		}	
	}else
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
					Driver Login
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
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
include 'footer/footer.php'; 	
?>