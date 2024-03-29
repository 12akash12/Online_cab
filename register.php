<?php 
include 'header/header.php';

if(isset($_POST['sign']))
{
	$fullName=$_POST['name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$phoneNumber=$_POST['phone'];

	//change 4th parameter to database name
	$con=mysqli_connect("localhost","root","","cabapp");
	//change table names
	$qer=mysqli_query($con,"insert into users (fullName,email,username,password,phone) values('$fullName','$email','$username','$password','$phoneNumber')");

	if($qer)
	{
		
		echo "<script>window.location.href='login.php';</script>";
		exit;
	}
	else
	{
		echo mysqli_error($con);

	}
}	
?>

<div class="limiter">
	<div class="container-login100">
		<div class="login100-more" style="background-image: url('images/back.jpg');"></div>

		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			<form class="login100-form validate-form" id="showRegForm" method="POST">
				<span class="login100-form-title p-b-59" id="signUpSpan">
					Sign Up
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name</span>
					<input class="input100" type="text" name="name" placeholder="Name...">
					<span class="focus-input100"></span>
				</div>				
				<div class="wrap-input100 validate-input" data-validate="Phone Number is required">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="text" name="phone" placeholder="Phone Number...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Email addess...">
					<span class="focus-input100"></span>
				</div>

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

				<div class="flex-m w-full p-b-33">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							<span class="txt1">
								I agree to the
								<a href="#" class="txt2 hov1">
									Terms of User
								</a>
							</span>
						</label>
					</div>		
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" name="sign">
							Sign Up
						</button>
					</div>

					<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" id="showLog">
						Login
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