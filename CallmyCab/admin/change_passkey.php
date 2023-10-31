<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">User Details</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > Settings > Change Password
	</span>
</section>
<div>
	<section class="content">
		<div class="row">
			<div class="col-xl-12">
				<div class="box">
					<div class="box-header"></div>
					<div class="box-body">
						<form method="POST" class="CP-body">
						<div class="box-body">
							<div class="form-group">
				                <label>Current </label>
								<input type="password" name="crnt_psw" class="form-control regcom samples" placeholder="Enter current password" required>
								<div class="cp-pass-cntnt-msg"></div>
							</div>
							<div class="form-group">
				                <label>New </label>
								<input type="password" name="psw1" id="psw1" placeholder="Enter a new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  class="form-control regcom samples">
								<div class="cp-pass-cntnt-msg" id="psw1ttl" ></div>
							</div>
							<div class="form-group">
				                <label>Re Enter </label>
								<input type="password" name="psw2" id="psw2" placeholder="Confirm your password" required  class="form-control regcom samples">
								<div class="cp-pass-cntnt-msg" id="psw2ttl"></div>
							</div>
							<div class="form-group">
				                <input type="submit" class="btn btn-primary" value="Save " name="Save" id="taxiadd">
				                <button type="reset" class="btn btn-primary">Reset </button>
				            </div>
				        </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
	if(isset($_POST['passchng']))
	{
		$crnt_psw = $_POST['crnt_psw'];
		$psw1  = $_POST['psw1'];
		$psw2 = $_POST['psw2'];
		$psw_chck_qry = mysqli_query($con,"select * from users where id = '$user'");
		while($psw_chck_res = mysqli_fetch_assoc($psw_chck_qry))
		{
			$password = $psw_chck_res['password'];
		}
		if($password == $crnt_psw)
		{
			if($psw1 == $psw2)
			{
				$psw_upd_qry = mysqli_query($con,"Update users SET password ='$psw1' where id = '$user'");
			}
			else{
				echo "<script>alert('New password and cofirm password doesnt match!');</script>";
			}
			if($psw_upd_qry){ echo "<script>alert('Password changed sucessfully!!');</script>"; }
		}
		else
		{
			echo "<script>alert('Enter your current password correctly');</script>";
		}

	}
		


	?>