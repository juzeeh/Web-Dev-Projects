<?php 

	$servername="localhost";
	$dbname="b13_zaybanrestaurant";
	$user="root";
	$password="";
	$dsn="mysql:host=$servername;dbname=$dbname";

			$pdo=new PDO($dsn, $user, $password);



			try
			{
				$conn=$pdo;
				// set the PDO ERROR mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "connected successfully";
			}
			catch(PDOException $e)
			{
				echo "Connection Failed: ".$e->getMessage();
			}
 ?>