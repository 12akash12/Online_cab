<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">View Booking Details</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > BD > view
	</span>
</section>
<div>
	<section class="content">
		<div class="row">
			<div class="col-xl-12">
				<div class="box">
					<div class="box-header"></div>
					<div class="box-body">
						<div class="dataTables_wrapper">
							<div class="row">
								<div class="col-sm-12">
									<table id="" class="table table-bordered table-striped tbl_package dataTable no-footer" role="grid" aria-describedby="example1_info">
										<thead>
											<tr role="row">
												<th rowspan="1" colspan="1">ID</th>
												<th rowspan="1" colspan="1">Name</th>
												<th rowspan="1" colspan="1">Pickup Loc</th>
												<th rowspan="1" colspan="1">Startup Loc</th>				
												<th rowspan="1" colspan="1">Price</th>				
												<th rowspan="1" colspan="1">Distance</th>
												<th rowspan="1" colspan="1">Pickup Time</th>
												<th rowspan="1" colspan="1">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$bookingdetqry = mysqli_query($con,"select * from booking");
												while($bookingdetres = mysqli_fetch_assoc($bookingdetqry)){
											?>
                  		<tr class="" role="row">
                  		<td class="center"> <?php echo $bookingdetres['id']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['fullName']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['startLocation']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['endLocation']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['price']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['distance']; ?> </td>
                        <td class="center"> <?php echo $bookingdetres['pickupTime']; ?> </td>
                        <td class="center"><!--<a href=""><i class="fa fa-pencil-square-o"></i></a>-->&nbsp;&nbsp;<a href="#" title="1" class="delete"><i class="fa fa-trash-o "></i></a></td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
	include 'headerfooter/footer.php';
?>