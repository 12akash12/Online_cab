<?php
	include 'headerfooter/header.php';
?>

<section class="content-header">
	<span class="ch-ttl">User Details</span>
	<span class="ch-bdy">
		<i class="fa fa-dashboard"></i> Home > UM > View
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
												<th rowspan="1" colspan="1">Mobile</th>
												<th rowspan="1" colspan="1">Email</th>
												<th rowspan="1" colspan="1">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$userlistqry = mysqli_query($con,"select * from users where isAdmin = 0");
												while($userlistres = mysqli_fetch_assoc($userlistqry)){
											?>
                  		<tr class="" role="row">
                        <td class="center"> <?php echo $userlistres['username']; ?> </td>
                        <td class="center"> <?php echo $userlistres['phone']; ?> </td>
                        <td class="center"> <?php echo $userlistres['email']; ?> </td>
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