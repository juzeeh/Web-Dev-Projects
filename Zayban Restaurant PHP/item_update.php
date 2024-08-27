<?php 

		include 'db_connect.php';
		$id=$_POST['id'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$description=$_POST['description'];

		$oldphoto=$_POST['oldphoto'];
		$newphoto=$_FILES['newphoto'];
		// echo $newphoto['name'];
		// die();


		if($newphoto['name'])
		{
			$file_path="image/".$newphoto['name'];
			move_uploaded_file($newphoto['tmp_name'], $file_path);
		}
		else
		{
			$file_path=$oldphoto;
		}


		$sql="UPDATE items SET name=:name, price=:price, photo=:photo, description=:description, category_id=:category WHERE id=:id";
		$stmt=$pdo->prepare($sql);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':price',$price);
		$stmt->bindParam(':photo',$file_path);
		$stmt->bindParam(':description',$description);
		$stmt->bindParam(':category',$category);
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