<?php 

		include 'db_connect.php';

		$name=$_POST['name'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$description=$_POST['description'];
		$image=$_FILES['photo'];

		$source_dir="image/";

		// $file_path="image/one.jpg";
		$file_path=$source_dir.$image['name'];
		move_uploaded_file($image['tmp_name'], $file_path);

		// echo $name.$price.$category.$description;
		// echo $image;

		$sql="INSERT INTO items (name,price,photo,description,category_id) VALUES (:name,:price,:photo,:description,:category_id)";

		$stmt=$pdo->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':price',$price);
		$stmt->bindParam(':photo',$file_path);
		$stmt->bindParam(':description',$description);
		$stmt->bindParam(':category_id',$category);
		$stmt->execute();


		if($stmt->rowCount())
		{
			header("Location:item_list.php");
		}
		else
		{
			echo "Error";
		}



 ?>