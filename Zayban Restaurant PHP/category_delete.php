<?php 
	include 'db_connect.php';
	$did=$_GET['did'];
	// echo $did;
	$sql="DELETE FROM categories WHERE id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':id',$did);
	$stmt->execute();
	if($stmt->rowCount())
	{
		header("Location:category_list.php");
	}
	else
	{
		echo "Error";
	}































 ?>