<?php 
	include 'backend_header.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  	

	  	
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-info mmfont"> 
			        Customer
			    </h4>
	            
	            
	        </div>
	        <div class="card-body">
				
				

	            <div class="table-responsive">
	            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Name </th>
								<th> Phone </th>
								<th> Action </th>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td> 1 </td>
								<td> aaa </td>
								<td> 0987654321 </td>

								<td>
									<a href="" class="btn btn-outline-primary mmfont">
										<i class="fas fa-eye"></i> 
										Detail
									</a>

									<a href="" class="btn btn-outline-danger mmfont" onclick="return confirm('Are you sure to delete?')" >
										<i class="fas fa-trash"></i> Delete
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
