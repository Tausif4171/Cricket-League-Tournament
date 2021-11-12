<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cricket Player Statistics</title>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .container {
            width: 100%;
        }

        .starter-template tr {
            line-height: 30px;
        }

        .mt20 {
            margin-top: 20px;
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="index.php"><img src="image/img1.png" style="width:100px; height:40px"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-size:18px">Home <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size:18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="india.php">India</a>
          <a class="dropdown-item" href="afghanistan.php">Afghanistan</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size:18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Players
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="india_player_details.php">India - Players Details</a>
          <a class="dropdown-item" href="afghanistan_player_details.php">Afghanistan - Players Details</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <li class="nav-item">
        <a class="nav-link" href="../../../index.php" style="font-size:18px">Dashboard</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
    <main class="container">
        <div class="starter-template py-5">
           

            <!-- <nav aria-label="breadcrumb" style="margin-top: 80px; text-align:center; width: 350px; margin-left:400px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><img src="image/img.png" alt="" style="width: 200px; height: 100px;  " /></li>
                    <li aria-current="page" style="font-size:24px;  margin-top: 35px;margin-left:20px">India</li>
                </ol>
            </nav>
            <nav aria-label="breadcrumb" style="margin-top: 80px; text-align:center; width: 350px; margin-left:400px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><img src="image/img1.png" alt="" style="width: 200px; height: 100px;  " /></li>
                    <li aria-current="page" style="font-size:24px;  margin-top: 35px;margin-left:20px">Pakistan</li>
                </ol>
            </nav> -->
            <h2 style="margin-top: 50px; text-align:center; margin-bottom:40px ">Countries</h2>
            <div class="row">
            <?php

include '../conn.php';

$q = "select * from countries";
$query = mysqli_query($conn,$q);
while($res = mysqli_fetch_array($query)){


?>
                <div class="col-md-3" style="margin-bottom:40px">
                    <img src="<?php echo "../uploads/".$res['file']; ?>" style="width: 200px; height: 100px;" alt="">
                    <h3 style="margin-left:0px"><?php echo $res['name']; ?></h3>
                </div>
                
                <!-- <div class="col-md-3">
                    <img src="image/img.png" style="width: 200px; height: 100px;  " alt="">
                </div>
                <div class="col-md-3">
                    <img src="image/img.png" style="width: 200px; height: 100px;  " alt="">
                </div>
                <div class="col-md-3">
                    <img src="image/img.png" style="width: 200px; height: 100px;  " alt="">
                </div> -->
                <?php
}
?>
            </div>
            

        </div>
        
    </main>
    <!-- /.container -->
    <div class="footer" style="background-color: #333; height:50px;">
    <br>
        <h6 style="text-align: center;margin-top:-10px; color: white;">Copyright © 2021 <a href="index.php">Cricket League Tournament</a>. All rights reserved.</h6>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>