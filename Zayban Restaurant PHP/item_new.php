<?php 
	include 'db_connect.php';
	include 'backend_header.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<div class="card shadow mb-4" id="Newdiv">
	  		<div class="card-header">
	            <div class="row">
					<div class="col-8">
						<h4 class="m-0 font-weight-bold text-info mmfont"> 
			            	Add New Item
			            </h4>
					</div>
					<div class="offset-2 col-2">
						<a href="item_list.php" class="btn btn-info btn-sm btn-block float-right">
							<i class="fas fa-backward"></i>
			            	Go Back
			            </a>
					</div>
				</div>

	  		</div>
	  		<div class="card-body">
	  			<div class="row">
					<div class="col-lg-12">
						<form action="item_add.php" method="post" enctype="multipart/form-data">
							<div class="form-group row">
							    <label for="photo" class="col-sm-2 col-form-label mmfont"> Photo </label>
							    <div class="col-sm-10">
							      <input type="file" class="form-control-file" id="photo"name="photo">
							    </div>
							</div>

							<div class="form-group row">
							    <label for="name" class="col-sm-2 col-form-label mmfont"> Name </label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="name" name="name">
							    </div>
							</div>

							<div class="form-group row">
							    <label for="price" class="col-sm-2 col-form-label mmfont"> Price </label>
							    <div class="col-sm-10">
							      <input type="number" class="form-control" id="price" name="price">
							    </div>
							</div>

							<div class="form-group row">
							    <label for="category" class="col-sm-2 col-form-label mmfont"> Category  </label>
							    <div class="col-sm-10">
							    	<select class="form-control" id="category" name="category">



							    		<?php 

							    			$sql="SELECT * FROM categories";
							    			$stmt=$pdo->prepare($sql);
											$stmt->execute();
											$rows=$stmt->fetchAll();
											foreach($rows as $category)
											{
												$id=$category['id'];
												$name=$category['name'];
											

							    		 ?>

							    		<option value="<?php echo $id ?>" ><?php echo $name; ?> </option>

							    		<?php 
								    		}
								    		 ?>
							    		<!-- <option> bb </option> -->
							    	</select>
							    </div>
							</div>

							<div class="form-group row">
							    <label for="description" class="col-sm-2 col-form-label mmfont"> Description </label>
							    <div class="col-sm-10">
							    	<textarea class="form-control" id="description" name="description"></textarea>
							    </div>
							</div>

							<div class="form-group row">
								<div class="offset-2 col-sm-10">
									<button type="reset" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"> 
				        				<i class="fas fa-times"></i> 	Reset
					        		</button>
						        	<button type="submit" class="btn btn-outline-primary btn-sm">
						        		<i class="fas fa-save"></i> Save changes
						        	</button>
								</div>
							</div>
							

							
						</form>
					</div>
				</div>
	  		</div>
	  	</div>

	</div>
<!-- /.container-fluid -->

<?php 
	include 'backend_footer.php'; 
?>
