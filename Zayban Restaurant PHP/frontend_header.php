<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="frontend/css/shop-homepage.css" rel="stylesheet">
  <link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="image/logo.png">
     
  <link rel="stylesheet" type="text/css" href="style.css">


  

  <!-- Bootstrap core CSS -->
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="frontend/css/shop-homepage.css" rel="stylesheet">

  <style type="text/css">
    
    .flip .back 
    {
      background: #fff;
      color: #000;
      padding-left: 25px;
    }

    .badge-notify
    {
      background: white;
      position: relative;
      top: -15px;
      left: -10px;
    }

  </style>


 



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="image/logo.png" class="img-fluid" width="70" height="70">
      <a class="navbar-brand" href="#">Zay Bann Restaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div> -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item mr-3 ml-3">
            <a class="nav-link" href="count.php">
              <i class="fas fa-cart-arrow-down fa-lg"></i>
              <span class="badge badge-danger badge-counter" id="count"></span>
            </a>
          </li>
          <?php if(isset($_SESSION['loginuser']))
          {
            ?>
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                  <?php echo $_SESSION['loginuser']['name'] ?>
                </span>
                <img class="img-profile rounded-circle" src="<?php echo $_SESSION['loginuser']['profile']?>" width="30" height="30"></a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Profile</a>
      <a class="dropdown-item" href="#">Order History</a>
      
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="signout.php">Logout</a>
    </div>
  </li>

        <?php
          }
          else
          {
            ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login | Register</a>
          </li>
          <?php
          }
           
           ?>
        </ul>
      </div>
    </div>
  </nav>


<script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      getcount();

      $(".addtocart").click(function(){
        // getcount();

        var id=$(this).data('id');
        var name=$(this).data('name');
        var price=$(this).data('price');
        var photo=$(this).data('photo');
        // alert(name+price);

        var shoeString=localStorage.getItem("myshoe");
        var shoeArray;
        var shoe={
          id:id,
          name:name,
          price:price,
          photo:photo,
          qty:1
        };
        
          if(shoeString==null)
          {
            shoeArray=Array();
          }
          else
          {
            shoeArray=JSON.parse(shoeString);
          }

          var status=false;

          $.each(shoeArray,function(i,v){
            if(id==v.id){
              status=true;
              v.qty++;
            }
          })
          if(!status)
          {
            shoeArray.push(shoe);
          }


          // shoeArray.push(shoe);

          var shoedata=JSON.stringify(shoeArray);
          localStorage.setItem("myshoe",shoedata);
          getcount();
        
      })

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

    })
    
  </script>
 