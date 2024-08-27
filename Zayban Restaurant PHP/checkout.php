<?php 

include 'db_connect.php';

$cartarr=$_POST['cart'];

date_default_timezone_set('Asia/Rangoon');
session_start();
// $cartarr=$_POST['cart'];
$orderdate=date('Y-m-d');
$userid=$_SESSION['loginuser']['id'];
$status="Order";
$total=0;

$order_sql="INSERT INTO orders(orderdate,total,user_id,status)VALUES(:orderdate,:total,:user_id,:status)";
$order_stmt=$pdo->prepare($order_sql);
$order_stmt->bindParam(':orderdate',$orderdate);
$order_stmt->bindParam(':total',$total);
$order_stmt->bindParam(':user_id',$userid);
$order_stmt->bindParam(':status',$status);
$order_stmt->execute();

$latestorder_sql="SELECT * FROM orders Order By orders.id desc";
$latestorder_stmt=$pdo->prepare($latestorder_sql);
$latestorder_stmt->execute();
$latestorder=$latestorder_stmt->fetch(PDO::FETCH_ASSOC);
$orderid=$latestorder['id'];
foreach($cartarr as $cart)
{
	$id=$cart['id'];
	$qty=$cart['qty'];
	$orderdetail_sql="INSERT INTO orderdetails(item_id,qty,order_id)VALUES(:item_id,:qty,:order_id)";
	$orderdetail_stmt=$pdo->prepare($orderdetail_sql);
	$orderdetail_stmt->bindParam(':item_id',$id);
	$orderdetail_stmt->bindParam(':qty',$qty);
	$orderdetail_stmt->bindParam(':order_id',$orderid);
	$orderdetail_stmt->execute();
}

echo "successfully added!";

 ?>