<?php
  include 'headerfooter/header.php';
?>

<section class="content-header">
  <span class="ch-ttl">User Details</span>
  <span class="ch-bdy">
    <i class="fa fa-dashboard"></i> Home > Car > Add
  </span>
</section>
<div>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box">
          <div class="editbook"></div>
          <div class="panel-heading"></div>        
          <div class="panel-body">
              <form role="form" method="post" action="" class="validate">
                  <div class="form-group">
                    <label>Car Type</label>
                    <input name="car_type" type="text" class="form-control " name="car_type" required>
                  </div>                                
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="col-sm-6">
                          <label>Car Image</label>
                          <input type="file" name="image" accept="image/*" size="20" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save" name="submit">
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
  if(isset($_POST['submit']))
  {
    $car_type = $_POST['car_type'];
    
  
    $addcar_qry = mysqli_query($con,"insert into car(car_type,car_img) values('$car_type','')");
  }
?>