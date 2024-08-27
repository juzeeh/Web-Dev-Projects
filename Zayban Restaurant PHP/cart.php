<?php 

include 'db_connect.php';
include 'forontend_header.php';

 ?>

 <div class="container m-5">
 	<div class="row mt-5">

 		<div class="col-lg-12">
 			<a href="menu" class="btn btn-outline-success float-right">
 				<i class="fas fa-shopping-cart"></i>Continue Shopping</a>
 			</div>
 		</div>
 		<div class="row mt-5" id="shoppingcart_div">
 			<div class="table-responsive">
 				<table class="table">
 					<thead>
 						<tr>
 							<th colspan="2">No</th>
 							<th>Menu</th>
 							<th>Qty</th>
 							<th>Price</th>
 							<th colspan="2">Total</th>
 						</tr>
 					</thead>

 					<tbody id="shoppingcart_table">
 						
 					</tbody>
 					<tfoot>
 						<tr>
 							<td colspan="5"></td>
 							<td colspan="5" id="shoppingcart_tfoot"> 
 								<a href="javascript:void(0)" class="btn outline-success orderbtn btn-block">Check Out</a>
 							</td>
 						</tr>
 					</tfoot>
 				</table>