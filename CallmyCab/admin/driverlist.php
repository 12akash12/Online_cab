<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">Driver Details</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > DM > View
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
												<th rowspan="1" colspan="1">Username</th>
												<th rowspan="1" colspan="1">Phone</th>
												<th rowspan="1" colspan="1">Address</th>
												<th rowspan="1" colspan="1">Licence No</th>
												<th rowspan="1" colspan="1">Car Type</th>
												<th rowspan="1" colspan="1">Car No</th>
												<th rowspan="1" colspan="1">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$driverlistqry = mysqli_query($con,"select * from driver");
												while($driverlistres = mysqli_fetch_assoc($driverlistqry)){
											?>
                  		<tr class="" role="row">
                        <td class="center"> <?php echo $driverlistres['username']; ?> </td>
                        <td class="center"> <?php echo $driverlistres['phone']; ?> </td>
                        <td class="center"> <?php echo $driverlistres['address']; ?> </td>
                        <td class="center"> <?php echo $driverlistres['license_no']; ?> </td>
                        <td class="center"> <?php echo $driverlistres['car_type']; ?> </td>
                        <td class="center"> <?php echo $driverlistres['car_no']; ?> </td>
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