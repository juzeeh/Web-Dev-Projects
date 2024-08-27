<?php 
	include 'db_connect.php';
	include 'backend_header.php';
	$id=$_GET['id'];
	$sql="SELECT * FROM categories WHERE id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();

	$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<div class="card shadow mb-4" id="Newdiv">
	  		<div class="card-header">
	            <div class="row">
					<div class="col-8">
						<h4 class="m-0 font-weight-bold text-info mmfont"> 
			            	Update Existing Category
			            </h4>
					</div>
					<div class="offset-2 col-2">
						<a href="category_list.php" class="btn btn-info btn-sm btn-block float-right">
							<i class="fas fa-backward"></i>
			            	Go Back
			            </a>
					</div>
				</div>

	  		</div>
	  		<div class="card-body">
	  			<div class="row">
					<div class="col-lg-12">
						<form action="category_add.php" method="post">
							<div class="form-group">
							    <label for="name" class="mmfont"> Name </label>
							    <input type="text" class="form-control mmfont " id="name" name="name" placeholder="" value="<?php echo $row['name'] ?>">
							</div>

							<button type="reset" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"> 
				        		<i class="fas fa-times"></i> Reset
				        	</button>
				        	<button type="submit" class="btn btn-outline-primary btn-sm">
				        		<i class="fas fa-save"></i> Save changes
				        	</button>
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
