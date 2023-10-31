<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">Callback</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > Callback
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
									<table  id="example1" class="table table-bordered table-striped tbl_package dataTable no-footer" role="grid" aria-describedby="example1_info">
										<thead>
											<tr role="row">
												<th rowspan="1" colspan="1">Name</th>
												<th rowspan="1" colspan="1">Mobile</th>
												<th rowspan="1" colspan="1">Date</th>
												<th rowspan="1" colspan="1">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$callbackqry = mysqli_query($con,"select * from callback");
												while($callbackres = mysqli_fetch_assoc($callbackqry)){
											?>
                  		<tr class="" role="row">
                        <td class="center"> <?php echo $callbackres['name']; ?> </td>
                        <td class="center"> <?php echo $callbackres['phoneNumber']; ?> </td>
                        <td class="center"> <?php echo $callbackres['date']; ?> </td>
                        <td class="center"><a href=""><i class="fa fa-trash-o "></i></a></td>
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