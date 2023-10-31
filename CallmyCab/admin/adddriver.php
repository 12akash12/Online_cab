<?php
  include 'headerfooter/header.php';
?>

<section class="content-header">
  <span class="ch-ttl">User Details</span>
  <span class="ch-bdy">
    <i class="fa fa-dashboard"></i> Home > DM > Add New
  </span>
</section>
<div>
  <section class="content">
    <div class="driver-cntnt">
      <div class="col-lg">
        <div class="box">
          <div class="box-header"></div>
            <form role="form" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label>Name</label>
                  <input id="name1" name="name" type="text" class="form-control  samples">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input id="user_name" name="username" type="text" class="form-control regcom samples">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input id="password" name="password" type="password" class="form-control regcom">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" name="address" id="address"></textarea>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" name="phone" id="phone">
                  </div><!-- /.input group -->
                </div><!-- /.form group -->
                <!--<div class="form-group">
                  <label>Email</label>
                  <input class="form-control regcom" name="email" id="email">
                </div>-->
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Save " name="Save" id="taxiadd">
                  <button type="reset" class="btn btn-primary">Reset </button>
                </div>

              </div>  
            <!--form-->
          </div>
        </div>

        <div class="col-lg">
          <div class="box">
            <div class="box-header"></div>
              <div class="box-body">
                <div class="form-group">
                    <label>License No</label>
                    <input class="form-control" name="license_no" id="license">
                </div>
                <div class="form-group ">
                  <label>Car Type</label>
                  <select id="cartype" class="form-control select2" style="width: 100%;" name="car_type">
                  <option value="0">Car Type</option>
                    <option value="Sedan">Sedan</option>
                    <option value="MPV">MPV</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Nano">Nano</option>
                    <option value="SUV">SUV</option>
                    <option value="fghh">fghh</option>
                    <option value="Sadan">Sadan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Car No</label>
                  <input class="form-control" name="car_no" id="carno">
                </div>

              </div>  
            </form>
          </div>
        </div>
    </div>
  </section>
</div>
<?php
  if(isset($_POST['Save']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $licenseno = $_POST['license_no'];
    $cartype = $_POST['car_type'];
    $carno = $_POST['car_no'];

    $adddriverqry = mysqli_query($con,"insert into driver(username,password,phone,address,license_no,car_type,car_no) values('$username','$password','$phone','$address','$licenseno','$cartype','$carno') ");
    if($adddriverqry){ echo "<script>alert('Data inserted sucessfully');</script>"; }
    else{ echo "<script>alert('Something went wrong!!');</script>"; }
  }
  if (!$adddriverqry)
  {
  echo("Error description: " . mysqli_error($con));
  }

?>
<?php
  include 'headerfooter/footer.php';
?>