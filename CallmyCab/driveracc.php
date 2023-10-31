<html lang="en">
<?php
  $con = mysqli_connect("localhost","root","","cabapp");
  session_start();

?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="admin\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin\css\jquery.js">
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
  <div class="col-lg-4" style="padding: 0;">
   <div class="main-login">
       <div class="main-first">
           <div class="row">
               <div class="col-lg-4 col-md-2 col-xs-4">
                   <img src="admin\images\user.gif">
               </div>
               <div class="col-lg-8">
                <?php
                  $driver_id = $_SESSION['user'];
                  $drvr_qry = mysqli_query($con,"select * from driver where driver_id='$driver_id'");
                  while ($drvr_res = mysqli_fetch_assoc($drvr_qry)) {
                    $status = $drvr_res['isBooked'];
                ?>
                   <div class="main-log-inner">
                       <h4><?php echo $drvr_res['username'];?></h4>
                       <h5>Personal Details</h5>
                       <h6 class="c-pass" onclick="switch_4pass()">Change Password --><span> </span></h6>
                   </div>
               </div>
           </div>
       </div>
        <div class="m-s-1" id="m_s_1">
           <div class="main-second">
            <form name="account_dtls" id="account_dtls" method="POST">
                <div class="form-group">
                   <label>Name</label>
                   <input type="text" class="form-control" name="username" readonly="" value="<?php echo $drvr_res['fullName'];?>" placeholder="UsernameUserName">
                   <ul></ul>
                </div>
                <div class="form-group">
                   <label>Phone</label>
                   <input type="email" class="form-control" name="email" readonly="" value="<?php echo $drvr_res['phone'];?>" placeholder="Mobile">
                   <ul></ul>
                </div>
                <div class="form-group">
                   <label>License No</label>
                   <input type="text" class="form-control" name="mobile" readonly="" value="<?php echo $drvr_res['license_no'];?>" placeholder="PhonePhone">
                   <ul></ul>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Car Type</label>
                    <select class="form-control" name="car_type"> 
                        <option value="Sedan"> Sedan</option>
                        <option value="MPV" selected=""> MPV</option>
                        <option value="Hatchback"> Hatchback</option>
                        <option value="Nano"> Nano</option>
                        <option value="SUV"> SUV</option>
                        <option value="newcar"> newcar</option>
                        <option value="jjj"> jjj</option>
                        <option value="fghh"> fghh</option>
                        <option value="Sadan"> Sadan</option> 
                    </select>
                    <ul class="" id=""></ul>
                </div>

                <div class="form-group">
                    <label>Preffered Time</label>
                    <select class="form-control" name="timetype"> 
                        <option value="day" selected="">Day</option>
                        <option value="night">Night</option>
 
                    </select>
                    <ul></ul>
                </div>
            <?php }?>
                <div class="form-group">
                    <input type="submit" name="save_info" id="save_details" class="btn btn-default btn-save" value="Save">
                    <a href="" class="cancel">Cancel</a>
                </div>
            </form>
               <div id="success_div" style="display: none;">Successfully Updated</div>
               <div id="error_div" style="display: none;">Error</div>
           </div>
          <?php
            if(isset($_POST['save_info']))
            {

              $car_typ = $_POST['car_type'];
              $pref_time = $_POST['timetype'];
              $per_det_qry = mysqli_query($con,"Update driver SET car_type='$car_typ' , preferedTime='$pref_time' where driver_id='$driver_id'");
              if($per_det_qry){echo "<script>alert('Your data are Updated!');window.location.href='driveracc.php';</script>";}     
            }
          ?>
       </div>
        <div class="m-s-2" id="m_s_2" style="display: none;">
            <div class="main-second">
            <form name="change_psw_acc" id="change_psw_acc" method="POST">
                <div class="form-group">
                    <input class="form-control" name="old_pass" id="old_pass" type="password" required placeholder="Current Password">
                    <ul></ul>
                </div>
                <div class="form-group">
                    <input name="passwords" id="passwords" class="form-control" type="password" required placeholder="Password">
                    <ul></ul>
                </div>
                <div class="form-group">
                    <input name="cpassword" id="cpassword" class="form-control" type="password"required placeholder="Confirm Password">
                    <ul></ul>
                </div>

                <div id="success_psw" style="display: none;">Password Successfully Changed</div>
                <div id="confirm_psw" style="display: none;">Confirm password not matching new password</div>
                <div id="current_psw" style="display: none;">Incorrect Current Password</div>
                <div id="error_psw" style="display: none;">Error in submission</div>
                <div class="form-group">
                    <input type="submit"  id="save_chng_psw" name="save_chng_psw" class="btn btn-default btn-save" value="Save">
                    <button type="Reset" class="btn btn-default btn-save hide-main-second">Reset</button>
                </div>

               </form>
               <?php
                  if(isset($_POST['save_chng_psw']))
                  {
                    $crnt_psw = $_POST['old_pass'];
                    $psw1  = $_POST['passwords'];
                    $psw2 = $_POST['cpassword'];
                    $psw_chck_qry = mysqli_query($con,"select * from driver where driver_id = '$driver_id'");
                    while($psw_chck_res = mysqli_fetch_assoc($psw_chck_qry))
                    {
                      $password = $psw_chck_res['password'];

                    }
                    if($password == $crnt_psw)
                    {
                      if($psw1 == $psw2)
                      {
                        $psw_upd_qry = mysqli_query($con,"Update driver SET password ='$psw1' where driver_id = '$driver_id'");
                      }
                      else{
                        echo "<script>alert('New password and cofirm password doesnt match!');window.location.href='driveracc.php';</script>";
                      }
                      if($psw_upd_qry){ 
                        echo "<script>alert('Password changed sucessfully!!');window.location.href='driveracc.php';</script>";
  
                      }
                    }
                    else
                    {
                      echo "<script>alert('Enter your current password correctly');window.location.href='driveracc.php';</script>";
                    }

                  }
    
               ?>
           </div>
       </div>


   </div>
  </div>
            <div class="col-lg-8 bac-gh-8">
                <div class="tab-login">
                    <div class="tab-lg-sub">
                        <h4>Booking Details</h4><br>
                        <h6 class="stat">
                                <?php
                                if($status == 0){echo("<span style='color:##EC4D37 '>Status:</span>
                                                        <span style='color:#EC4D37 '>Complete</span>
                                  ");}
                                else {
                                   ?><form method="POST">
                                  <span style='color:##EC4D37 '>Status:</span> 
                                  <span style='color:green '>Active</span> &emsp;&emsp;&emsp;
                                          <input type='submit' value='Yes! I completed my ride' name="status">
                                        </form>
                                   
                               <?php }
                                ?>
                          </h6>
                          <?php
                            if(isset($_POST['status']))
                            {
                              $stsupd_qry = mysqli_query($con,"update driver set isBooked='0' where driver_id = '$driver_id'");
                              if(!$stsupd_qry)
                              {
                                 echo("Error description: " . mysqli_error($con));
                              }
                              if($stsupd_qry)
                              {
                                 echo("<script>window.location.href='driveracc.php';</script>");
                              }
                            }
                            
                          ?>
                        <div class="row">
                            <div class="col-lg-12">

                        </div>
                    </div>

                </div>
                <div class="tab-content mn-ht-content">

                    <?php
                      $booking_qry = mysqli_query($con,"Select * from booking where assignedDriverId = '$driver_id'");
                      while($booking_res = mysqli_fetch_assoc($booking_qry)){
                    ?>
                    <div id="menulg" class="">
                        <div class="tab-login-first">
                            <h5>From<span><?php echo $booking_res['startLocation']; ?></span></h5>
                            <h5>To<span><?php echo $booking_res['endLocation']; ?></span></h5>
                            <div class="date-tf">
                                <h6>Pickup Time <span><?php echo $booking_res['pickupTime']; ?></span></h6>
                            </div>
                            <div class="date-tf">
                                <h6>Booking ID: <span><?php echo $booking_res['id']; ?></span></h6>
                            </div>

                            <div class="date-tf">
                                <h6>Total Fare:<span><?php echo $booking_res['price']; ?></span> </h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>                             
                    </div>
                <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
  function switch_4pass()
  {
    var ms1 = document.getElementById('m_s_1');
    var ms2 = document.getElementById('m_s_2');
    ms1.style.display='none';
    ms2.style.display='block';
  }
</script>
</body></html>