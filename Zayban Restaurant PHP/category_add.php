<?php 

	include 'db_connect.php';

	$name=$_POST['name'];

	// echo $name;
	$sql="INSERT INTO categories (name) VALUES (:name1)";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':name1', $name);
	$stmt->execute();

	if($stmt->rowCount())
	{
		header("Location:category_list.php");
	}
	else
	{
		echo "Error";
	}