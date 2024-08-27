<?php 
	include 'backend_header.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">
		  	<i class="fas fa-fw fa-tachometer-alt pr-3"></i> 
		  	Dashboard 
		</h1>

		<div class="row">
			<!-- Today Order List -->
            <div class="col-xl-3 col-md-6 mb-4">
	            <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 mmfont">Today Order  </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	0
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-concierge-bell fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	            </div>
            </div>

            <!-- Customer List -->
            <div class="col-xl-3 col-md-6 mb-4">
	            <div class="card border-left-warning shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 mmfont"> Customer </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	3
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-users fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	            </div>
            </div>

            <!-- Item List -->
            <div class="col-xl-3 col-md-6 mb-4">
	            <div class="card border-left-danger shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 mmfont"> Item  </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	10
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-utensils fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	            </div>
            </div>

            <!-- Category List -->
            <div class="col-xl-3 col-md-6 mb-4">
	            <div class="card border-left-success shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 mmfont">  Category  </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	14
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-hamburger fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	            </div>
            </div>


		</div>
		
	<div class="card shadow mb-4">
		<div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-danger mmfont"> 

            	Today Order
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

					<tbody class="itemtbody">

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
