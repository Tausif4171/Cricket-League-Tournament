<?php include('header.php') ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Suraj Kesari Foundation</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">

  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- themify CSS -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <!-- magnific popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- nice select CSS -->
  <link rel="stylesheet" href="css/nice-select.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Legal Documents</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container" style="margin-bottom: 120px; margin-top:60px">
    <div class="row">
      <?php

      include 'conn.php';

      $q = "select * from legal";
      $query = mysqli_query($conn, $q);
      while ($res = mysqli_fetch_array($query)) {


      ?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="card" style="width: 18rem; border-color:green; border-radius: 15px;">
            <i class="far fa-file-pdf" style="font-size: 70px; text-align:center; margin-top: 20px; color: red"></i>
            <div class="card-body" style="text-align: center;">
              <h5 class="card-title"><?php echo $res['Name']; ?></h5>
              <!-- <a href="<?php echo $res['Image']; ?>">g</a> -->
              <a href="<?php echo "../uploads/" . $res['Image']; ?>" target="_blank" class="btn btn-primary"><i class="fas fa-download"></i>&nbsp;Download</a>
            </div>
          </div>
          <br>
          <br>
        </div>
        <!-- <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="card" style="width: 18rem;">
            <i class="far fa-file-pdf" style="font-size: 70px; text-align:center; margin-top: 20px; color: red "></i>
            <div class="card-body" style="text-align: center;">
              <h5 class="card-title">Card title</h5>
              <a href="#" class="btn btn-primary"><i class="fas fa-download"></i>&nbsp;Download</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="card" style="width: 18rem;">
            <i class="far fa-file-pdf" style="font-size: 70px; text-align:center; margin-top: 20px; color: red "></i>
            <div class="card-body" style="text-align: center;">
              <h5 class="card-title">Card title</h5>
              <a href="#" class="btn btn-primary"><i class="fas fa-download"></i>&nbsp;Download</a>
            </div>
          </div>
        </div> -->
      <?php
      }
      ?>

    </div>
  </div>

  </div>


</body>

</html>
<?php include('footer.php') ?>