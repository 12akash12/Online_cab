<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">User Details</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > Dashboard
	</span>
</section>
<div>
	<section class="content">
        <div class="row">

			<div class="col-lg-3 col-xs-6">
				<?php
					$booking_qry = mysqli_query($con,"Select * from booking");
					$booking_no = mysqli_num_rows($booking_qry);
				?>
	            <div class="small-box bg-aqua">
		            <div class="inner">
						    <h3><?php echo $booking_no; ?></h3>
		                  	<p>Booking</p>
		            </div>
		            <div class="icon">
		                <i class="ion ion-bag"></i>
		            </div>
		            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	            </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<?php
					$driver_qry = mysqli_query($con,"Select * from driver");
					$driver_no = mysqli_num_rows($driver_qry);
				?>
              	<div class="small-box bg-green">
	                <div class="inner">
					    <h3><?php echo $driver_no; ?></h3>
	                  	<p>Driver</p>
	                </div>
	                <div class="icon">
	                  <i class="ion ion-stats-bars"></i>
	                </div>
	                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	            </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<?php
					$user_qry = mysqli_query($con,"Select * from users where isAdmin=0");
					$user_no = mysqli_num_rows($user_qry);
				?>
              	<div class="small-box bg-yellow">
                	<div class="inner">
				        <h3><?php echo $user_no; ?></h3>
	                  	<p>User Registrations</p>
	                </div>
	                <div class="icon">
	                  <i class="ion ion-person-add"></i>
	                </div>
                	<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              	</div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
              	<div class="small-box bg-red">
                	<div class="inner">
                    	<h3>3</h3>
                  		<p>Unique Visitors</p>
                	</div>
                	<div class="icon">
                  	<i class="ion ion-pie-graph"></i>
                	</div>
                	<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              	</div>
            </div><!-- ./col -->
			
		</div>
	</section>
</div>
<?php
	include 'headerfooter/footer.php';
?>