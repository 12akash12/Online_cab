<?php
  include 'headerfooter/header.php';
?>
  <section class="content-header">
    <span class="ch-ttl">Add User Details</span>
    <span class="ch-bdy">
      <i class="fa fa-dashboard"></i> Home > UM > Add New
    </span>
  </section>
 <!-- Main content -->
	<div class="content">

    <div class="col-lg-12">
      <div class="box">
				<div class="box-header"></div>
				  <form role="form" method="post">
				    <div class="box-body">

				      <div class="form-group">
                <label>username</label>
                <input id="signup-username" name="username" class="form-control regcom sample" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-minlength="6" data-parsley-maxlength="15" required="" placeholder="Username" data-parsley-id="4">
              </div>
					    <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control regcom " data-parsley-minlength="6" data-parsley-maxlength="15" required="" id="signup-password" placeholder="Password" data-parsley-id="6">
              </div>
					    <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control regcom " id="signup-email" placeholder="Email" required="" data-parsley-id="8">
              </div>   
				      <div class="form-group">
                <label>Mobile</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="number" class="form-control regcom sample" placeholder="Mobile" name="mobile" id="signup-mobile" required="" data-parsley-id="10">
                </div><!-- /.input group -->
              </div><!-- /.form group -->   
				      <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="Save" id="useradd">  
                <button type="reset" class="btn btn-primary">Reset</button>					  
              </div>

    				</div>  
	        </form>
        </div><!-- /.box -->
			</div>

  </div>
<?php
  if(isset($_POST['Save']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $adduserqry = mysqli_query($con,"insert into users (username,email,phone,password) values('$username','$email','$mobile','$password') ");
    if($adduserqry){ echo "<script>alert('Data inserted sucessfully');</script>"; }
    else{ echo "<script>alert('Something went wrong!!');</script>"; }
  }
?>
<?php
  include 'headerfooter/footer.php';
?>