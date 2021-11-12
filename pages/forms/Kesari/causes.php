<?php include('header.php') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charity</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
</head>

<body>

     <!-- breadcrumb start-->
     <section class="breadcrumb breadcrumb_bg" style="background-image: url(img/Causes_header.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>causes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::passion part start::-->
    <section class="passion_part passion_section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Donation shows Passion</p>
                        <h2>Featured  <span style="color:#00c424">Causes</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php

include 'conn.php';

$q = "select * from cause";
$query = mysqli_query($conn,$q);
while($res = mysqli_fetch_array($query)){


?>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                        <img src="<?php echo "../uploads/".$res['File']; ?>"  class="card-img-top" alt="Image">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title"><?php echo $res['Name']; ?> </h5>
                                </a>
                                <br>
                                <div class="">
                                <?php echo $res['Description']; ?>
                                </div>
                                <br>
                                <ul>
                                    <li><img src="img/icon/passion_1.svg" alt=""> Goal: $<?php echo $res['Goal']; ?></li>
                                    <li><img src="img/icon/passion_2.svg" alt=""> Raised: $<?php echo $res['Amount']; ?></li>
                                </ul>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </section>
    <!--::passion part end::-->



    <!-- footer part start-->

    <!-- footer part end-->


    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
<?php include('footer.php') ?>