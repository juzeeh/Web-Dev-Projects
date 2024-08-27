<?php 
include 'db_connect.php';

	if(isset($_POST))
	{

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		// $cpassword=$_POST['cpassword'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];

		$profile="image/user.png";
		$role="member";


		$sql="INSERT INTO users (name,address,phonenumber,email,password,profile,role) VALUES (:name,:address,:phonenumber,:email,:password,:profile,:role)";

		$stmt=$pdo->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':address',$address);
		$stmt->bindParam(':phonenumber',$phone);
		$stmt->bindParam(':email',$email);

		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':profile',$profile);
		$stmt->bindParam(':role',$role);
		$stmt->execute();

		session_start();
		$_SESSION['reg_success']="Thanks! your account has been successfully created and now <b> Signed In.</b>";


		if($stmt->rowCount())
		{
			header("Location:login.php");
		}
		else
		{
			echo "Error";
		}


	}

 ?>