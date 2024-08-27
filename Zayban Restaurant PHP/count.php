<?php 
	include 'db_connect.php';
	include 'frontend_header.php';
	?>



	<div class="container-fluid">
	  <!-- Page Heading -->
	  	

	  	
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<center><h4 class="m-5 font-weight-bold text-info mmfont" align="center"> 
			            	Your Shopping Cart
			            </h4></center>
			            <hr>
			            <h6 align="center">Thank you for your Shopping with us.</h6>
			            <a href="index.php"><button class="btn btn-outline-success  btn-sm  float-right">
                     
                    <i class="fas fa-shopping-cart"></i>Continue Shopping
                  </button></a>
				<!-- <div class="row">
					<div class="col-8">
						<center><h4 class="m-5 font-weight-bold text-info mmfont" align="center"> 
			            	Your Shopping Cart
			            </h4></center>
					</div>
					<div class="offset-2 col-2">
						<a href="item_new.php" class="btn btn-info btn-sm btn-block float-right mmfont">
							<i class="fas fa-plus"></i>
			            	Add New
			            </a>
					</div>
				</div> -->
	            
	            
	        </div>
	        <div class="card-body">
				
				

	            <div class="table-responsive">
	            	<!-- <form action="checkout.php" method="post" enctype="multipart/form-data"> -->
	            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Photo </th>
								<th> Name </th>
								<th> Price </th>
								<th> Qty </th>
								
								<th> Total </th>
							</tr>
						</thead>

						<tbody id="shoelist">
			
		</tbody>
						

	            	</table>
	            <!-- </form> -->
	            </div>
	        </div>
		</div>

	</div>
<!-- /.container-fluid -->

 <?php


	include 'frontend_footer.php';	
 ?>






	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			getcount();
			getdata();


			function getdata()
			{
			var shoeString=localStorage.getItem("myshoe");
			if(shoeString){
				var shoeArray=JSON.parse(shoeString);
				var html='';
				var j=1;
				var total=0;
				var total1=0;
				$.each(shoeArray,function(i,v){
					var id=v.id;
					var name=v.name;
					var price=v.price;
					var photo=v.photo;
					var qty=v.qty;
					var stotal=price*qty;
					total+=stotal;

					


					html+=`<tr>
					<td>${j++}</td>
					<td><img src="${photo}" width="50" height="50"></td> 
					<td>${name}</td>
					<td>${price}</td>
					<td><button class="sub btn btn-success btn-sm d-inline" data-id="${i}" data-name="${v.name}" data-price="${v.price}" data-qty="${v.qty}"><i class="fas fa-minus fa-sm qty-fa"></i></button>      ${qty} <button class="add btn btn-success btn-sm d-inline" data-id="${i}" data-name="${v.name}" data-price="${v.price}" data-qty="${v.qty}"><i class="fas fa-plus fa-sm qty-fa"></i></button></td>
					<td>${stotal}</td></tr>
					</tr>`;
					
				})

					total1=total-(total*.05);



				html+=`<tr><td colspan='5' align='center'>Subtotal</td>
					<td>${total}</td></tr>
					<tr><td colspan='5' align='center'>Tax</td>
					<td>5%</td></tr>
					<tr><td colspan='5' align='center'><font color='red'>Total Amount</font></td>
					<td><font color='red'>${total1}</font></td></tr>
					<tr><td colspan="6" align="right"><a href="index.php"><button type="submit" class="btn btn-success  btn-sm  float-right" id="order">
                     
                    <i class="fas fa-shopping-cart"></i>Checkout
                  </button></a></td></tr>`;

				$("#shoelist").html(html);


			}

			 // $("#order").click(function(){
			 	
			 }


			 function getcount(){
				var shoe=localStorage.getItem("myshoe");
				var countqty=0;
				if(shoe)
				{
					var shoeArray=JSON.parse(shoe);
					
					$.each(shoeArray,function(i,v){
						var qty=v.qty;
						countqty+=parseInt(qty);
						$("#count").text("("+countqty+")");
					})
				}
				
			}

			$("#shoelist").on('click','.sub',function(){
					var id=$(this).data('id');
					var qty=$(this).data('qty');
					var name=$(this).data('name');
					var price=$(this).data('price');

					
					var shoe=localStorage.getItem("myshoe");

					if(shoe){
						qty=qty-1;

						if(qty<0)
						{
							qty=0;
						}
						//alert(qty);
						var shoeArray=JSON.parse(shoe);
					    shoeArray[id].qty=qty;
					    //shoeArray[id].id=id;
					    shoeArray[id].name=name;
					    shoeArray[id].price=price;

						var shoeData=JSON.stringify(shoeArray);
					    localStorage.setItem("myshoe",shoeData);
					    
					    getdata();
					    getcount();

					} 
					
				})


			$("#shoelist").on('click','.add',function(){
					var id=$(this).data('id');
					var qty=$(this).data('qty');
					var name=$(this).data('name');
					var price=$(this).data('price');

					
					var shoe=localStorage.getItem("myshoe");

					if(shoe){
						qty=qty+1;

						if(qty<0)
						{
							qty=0;
						}
						//alert(qty);
						var shoeArray=JSON.parse(shoe);
					    shoeArray[id].qty=qty;
					    //shoeArray[id].id=id;
					    shoeArray[id].name=name;
					    shoeArray[id].price=price;

						var shoeData=JSON.stringify(shoeArray);
					    localStorage.setItem("myshoe",shoeData);
					    
					    getdata();
					    getcount();

					} 
					
				})

			$("#shoelist").on('click','#order',function(){
			 	var conf=confirm("Are you sure to buy items");
			 	if(conf==true){
			 		alert("Your Order is Successfully!");

			 		var stuString=localStorage.getItem("myshoe");
				if(stuString){
					var stuArray=JSON.parse(stuString);
					//stuArray.splice(1,stuArray.length);
					stuArray=[];
					$("#count").empty();
					//getcount();
					//console.log(stuArray.length);


					// var stuArray=JSON.parse(stuString);
								// console.log(stuArray);
								$.post('checkout.php',{cart:stuArray},function(response){
									// console.log(response);
									// if(response){
									// 	localStorage.clear();
									// 	window.location.href="index.php";
									// }
								})
					

			 	}

			 	var stuData=JSON.stringify(stuArray);
				localStorage.setItem("myshoe",stuData);
				$("#shoelist").hide();

			}
			 	else
			 	{
			 		alert("Your Order is Cancelled! and you will reach home page!");
			 		var stuString=localStorage.getItem("myshoe");
				if(stuString){
					var stuArray=JSON.parse(stuString);
					//stuArray.splice(1,stuArray.length);
					stuArray=[];
					$("#count").empty();
				}

				var stuData=JSON.stringify(stuArray);
				localStorage.setItem("myshoe",stuData);
				$("#shoelist").hide();
			 	}

			})







		});
	</script>