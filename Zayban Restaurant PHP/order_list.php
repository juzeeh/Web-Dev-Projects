<?php 
	include 'backend_header.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  	

	  	
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-info mmfont"> 
			        Order List
			    </h4>
	            
	            
	        </div>
	        <div class="card-body">
				
				

	            <div class="table-responsive">
	            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Voucher No </th>
								<th> Date </th>
								<th> Total </th>
								<th> Status </th>
								<th> Action </th>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td> 1 </td>
								<td> 1576532418 </td>
								<td> 17 - Dec - 2019 </td>
								<td> 25500 </td>
								<td> Order </td>

								<td>
									<a href="" class="btn btn-outline-success mmfont">
										<i class="fas fa-check-double"></i> 
										Confirm
									</a>

									<a href="" class="btn btn-outline-primary mmfont">
										<i class="fas fa-truck"></i> Delivery
									</a>
								</td>
							</tr>

						</tbody>

						

	            	</table>
	            </div>
	        </div>
		</div>

	</div>
<!-- /.container-fluid -->

<?php 
	include 'backend_footer.php'; 
?>
