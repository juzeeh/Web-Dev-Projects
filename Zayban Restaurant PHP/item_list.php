<?php 
	include 'db_connect.php';
	include 'backend_header.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  	

	  	
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-8">
						<h4 class="m-0 font-weight-bold text-info mmfont"> 
			            	Item
			            </h4>
					</div>
					<div class="offset-2 col-2">
						<a href="item_new.php" class="btn btn-info btn-sm btn-block float-right mmfont">
							<i class="fas fa-plus"></i>
			            	Add New
			            </a>
					</div>
				</div>
	            
	            
	        </div>
	        <div class="card-body">
				
				

	            <div class="table-responsive">
	            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Name </th>
								<th> Price </th>
								<th> Description </th>
								<th> Category </th>
								<th> Action </th>
							</tr>
						</thead>

						<tbody>


								<?php 

								$sql="SELECT items.*,categories.id as cid, categories.name as cname from items INNER JOIN categories on categories.id=items.category_id";
								$stmt=$pdo->prepare($sql);
								$stmt->execute();
								$rows=$stmt->fetchAll();
								$i=1;

								foreach($rows as $category)
								{
									$id=$category['id'];
									$name=$category['name'];
									$price=$category['price'];
									$photo=$category['photo'];
									$desc=$category['description'];
									$cat_id=$category['category_id'];
									$cid=$category['cid'];
									$cname=$category['cname'];

							 ?>



							<tr>
								<td> <?php echo $i++; ?> </td>
								<td> <?php echo $name; ?> </td>
								<td> <?php echo $price; ?> </td>
								<td> <?php echo $desc; ?> </td>
								<td> <?php echo $cname; ?> </td>

								<td>
									<a href="item_edit.php?id=<?php echo $id; ?>" class="btn btn-outline-warning btnedit mmfont">
										<i class="fas fa-edit"></i> 
										Edit
									</a>

									<a href="itemdelete.php?did=<?php echo $id; ?>" class="btn btn-outline-danger mmfont" onclick="return confirm('Are you sure to delete?')" >
										<i class="fas fa-trash"></i> Delete
									</a>
								</td>
							</tr>

							<?php 

								}

							 ?>

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
