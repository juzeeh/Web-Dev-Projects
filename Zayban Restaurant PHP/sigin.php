<?php 

include 'db_connect.php';

	$useremail=$_POST['email'];
	$userpassword=$_POST['password'];


	$sql="SELECT * FROM users WHERE email=:email AND password=:password";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':email',$useremail);
	$stmt->bindParam(':password',$userpassword);
	$stmt->execute();


	if($stmt->rowCount()<=0)
	{
		if(!isset($_COOKIE['logInCount']))
		{
			$logInCount=1;
		}

		else
		{
			$logInCount=$_COOKIE['logInCount'];
			$logInCount++;
		}
		setcookie('logInCount',$logInCount,time()+10);

		if($logInCount>=3)
		{
			// Waiting 1 minutes
			echo "<html>
					<head>
						<title> Animal Stroe</title>
						<link href='backend/css/sb-admin-2.css.min.css'>
						<script href='jquery.min.js'></script>
					</head>

					<body class='bg-white'>
					<div class='container'>
						<div class='row justify-content-center'>
							<div class='col-xl-10 col-lg-12 col-md-9 mt-5'>
								<div class='card o-hidden border-0 shadow-lg my-5'>
									<div class='card-body p-0'>
										<div class='row'>
											<div class='col-lg-12 d-none d-lg-block'>
												<img src='image/time.png' class='img-fluid'>
											</div>
												<div class='card-img-overlay'>
													<h1 class='text-center'><span class='display-3'>Sorry!</span>Something's gone wrong </h1>
													<p class='card-text'>Login Failed for three times.Try again after 1 minute.
													</p>

												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</body>
				</html>";

				echo "<script type=\"text/javascript\">

					(function()
					{
						setTimeout(function()
						{
							location.href='login.php';
							},10000)
						})();

				</script>";

				setcookie('logInCount','',time()-10);
		}

		else
		{




		session_start();
		// invalid email and password
		$_SESSION['login_reject']="Email and Password is invalid";
		header("Location: login.php");
		}
	}

	else
	{
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

		$role=$row['role'];

		session_start();
		$_SESSION['loginuser']=$row;
		// var_dump($_SESSION['loginuser']);
		// die();

		if($role=="admin")
		{
			header("Location:item_list.php");

		}
		else
			{
			header("Location:index.php");
			
		}
		// var_dump(($role));die();
	}




 ?>