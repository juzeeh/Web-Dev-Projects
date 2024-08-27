<?php 
	include 'db_connect.php';
	include 'frontend_header.php';
	?>


		<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Category Name</h1>
        <div class="list-group">

        	<?php 

								 // $sql="SELECT categories.name, COUNT(*) AS cname
         //          FROM categories,items
         //          WHERE  categories.id=items.category_id 
         //          GROUP BY 1";

          // the same 

                  $sql="SELECT categories.name, COUNT(*) AS cname
                  FROM categories
                  JOIN items ON items.category_id  = categories.id
                  GROUP BY 1";


								$stmt=$pdo->prepare($sql);
								$stmt->execute();
								$rows=$stmt->fetchAll();
								

								foreach($rows as $category)
								{
									// $id=$category['id'];
                  $name=$category['name'];
									$count=$category['cname'];
                  // $count=$category['post_count'];
                  // $count=$category['ccid'];

								



							 ?>


          <a href="#" class="list-group-item"><?php echo $name; ?>(<?php echo $count ?>)</a>
          <!-- <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a> -->

          <?php 

								}

							 ?>








        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="image/bg1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="image/bg2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="image/bg3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

       <!--  <h3><a href="index.php">Shop</a> |
  <a href="count.php">Count<span id="count"></span></a></h3> -->

        <div class="row">


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



          <div class="col-lg-4 col-md-6 mb-4">

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo $photo; ?>" alt="" width="150" height="200"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $name; ?></a>
                </h4>
                
                <p class="card-text"><?php echo $desc; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-danger" style="font-size: 16px"> <i class="fas fa-tags"></i> <?php echo $price; ?></small>
                
                <span class="d-inline-block float-right" tabindex="0" data-toggle="tooltip" title="If you want to order,you must need to be our member">
                  <button class="btn btn-primary  btn-sm addtocart"  data-name="<?php echo $name; ?>" data-price="<?php echo $price; ?>" data-id="<?php echo $id; ?>"data-photo="<?php echo $photo; ?>">
                     
                    <i class="fas fa-shopping-cart"></i>  Add To Cart
                  </button>
                </span>
                  
              </div>
            </div>
          </div>

          <?php 

								}

							 ?>

          
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php


	include 'frontend_footer.php';	
 ?>



 
