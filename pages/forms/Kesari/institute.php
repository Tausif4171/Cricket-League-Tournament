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
    <section class="breadcrumb breadcrumb_bg" style="background-image: url(img/Institute_header.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Institute</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <section class="client_part padding_bottom" id="b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <!-- <p>See our photos</p> -->
                        <h2>Our  <span style="color:#00c424">Courses</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <!-- <h3 class="mb-30">Left Aligned</h3> -->
                <div class="row">
                    <div class="col-md-3" id="course1">
                        <img src="img/f1.png" alt="" class="img-fluid" style="height: 200px;">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <p style="text-align: center;">We are the authorized examination center of IIBF Bank Mitra examination. BANK Mitra
                            Objectives of the IIBF Examination. The main objective of the IIBF examination is to provide
                            information about banking to the bank Mitra BC agent. After completing this certification
                            anyone can be Banking Correspondent.</p>
                        <!-- <p style="margin-top:2px">Admit card download link -</p> -->
                        <div style="text-align: center;">
                            <a href="https://iibf.esdsconnect.com/nonreg/memlogin/?Extype=Mg==&Mtype=Tk0=&ExId=MTAx" class="btn_2" style="width: 168px; height:44px; font-size:12px; margin-top:8px">Admit Card Download Link</a>
                            <!-- <a href="https://iibf.esdsconnect.com/nonreg/memlogin/?Extype=Mg==&Mtype=Tk0=&ExId=MTAx">Click here</a></p> -->
                            <!-- <p style="margin-top:12px">Download Ecertificate -</p> -->
                            <!-- <a href="https://iibf.esdsconnect.com/Download_ecertificate">Click here</a></p> -->
                            <a href="https://iibf.esdsconnect.com/Download_ecertificate" class="btn_2" id="btn2">Download Ecertificate</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section-top-border text-right">
                <!-- <h3 class="mb-30">Right Aligned</h3> -->
                <div class="row">
                    <div class="col-md-9" style="text-align:center">
                        <p class="" style="text-align: center;">Approved study center of Amity University Online Education.UGC Approved
                            UG/PG Programmes from Amity University Online through Approved CSC Academy Centers
                            https://www.cscacademy.org/amity_online.</p>
                        <p class="" style="text-align: center;">Amity University Online is a constituent of Amity University that offers
                            part-time undergraduate, postgraduate and diploma courses in Management, Commerce, Art &
                            Humanities, Finance, Media & Journalism, Information Technology and Travel & Tourism. </p>
                        <p class="" style="text-align: center;">It is India’s first university offering UGC and Distance Education Board (DEB) approved
                            online programmes. It is also accredited with an "A" Grade by the National Assessment and
                            Accreditation Council (NAAC).</p>
                        <!-- <p class="text-left">For admission - </p> -->
                        <div style="text-align: center;">
                            <a href="https://amityonline.com/CSC/Home/Basic#" class="btn_2" style="width: 110px; height:44px; font-size:12px; margin-top:8px; ">For Admission</a>
                        </div>

                        <!-- <a href="https://amityonline.com/CSC/Home/Basic#">Click here</a> </p> -->
                    </div>
                    <div class="col-md-3" id="course">
                        <img src="img/g.png" alt="" class="img-fluid" id="course_1">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="client_part padding_bottom" id="fees">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <!-- <p>See our photos</p> -->
                        <h2>Fees  <span style="color:#00c424">Structure</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-top-border" id="d">
                <!-- <h3 class="mb-30">Table</h3> -->
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">No.</div>
                            <div class="country">Course Name</div>
                            <div class="visit" id="a">Amity Website Fees to Student</div>
                            <div class="percentage">CSC Academy Fees to Student</div>
                            <div class="percentage1" style="    color: #415094;
                        line-height: 40px;
                        text-transform: uppercase;
                        font-weight: 500;">Per Semester Fees</div>
                        </div>
                        <?php

                        include 'conn.php';

                        $q = "select * from institute";
                        $query = mysqli_query($conn, $q);
                        while ($res = mysqli_fetch_array($query)) {


                        ?>
                            <div class="table-row">
                                <div class="serial"><?php echo $res['id']; ?></div>
                                <div class="country"><?php echo $res['Course Name']; ?></div>
                                <div class="visit" id="a"><?php echo $res['AMITY Website Fees']; ?></div>
                                <div class="percentage">
                                    <?php echo $res['CSC Academy Fees']; ?>
                                </div>
                                <div class="percentage1">
                                    <?php echo $res['Per Semester Fees']; ?>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
    </section>









    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>"A little help can make all the difference !"</h2>
                        <a href="#" class="btn_2">Start Donation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::volunteers_part end::-->

    <section class="client_part padding_bottom" id="gall">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Gallery</p>
                        <h2>Our  <span style="color:#00c424">Gallery</span></h2>
                    </div>
                </div>
            </div>
            <div class="gallery">
                <a href="img/abc1.jpeg" data-lightbox="mygallery"><img src="img/abc1.jpeg"></a>
                <a href="img/abc17.jpg" data-lightbox="mygallery" style="width: 1040px; height: 780px;"><img src="img/abc17.jpg"></a>
                <a href="img/abc2.jpeg" data-lightbox="mygallery"><img src="img/abc2.jpeg"></a>
                <a href="img/abc3.jpeg" data-lightbox="mygallery"><img src="img/abc3.jpeg"></a>
                <a href="img/abc4.jpeg" data-lightbox="mygallery"><img src="img/abc4.jpeg"></a>
                <a href="img/abc5.jpeg" data-lightbox="mygallery"><img src="img/abc5.jpeg"></a>
                <a href="img/abc6.jpeg" data-lightbox="mygallery"><img src="img/abc6.jpeg"></a>
                <a href="img/abc7.jpeg" data-lightbox="mygallery"><img src="img/abc7.jpeg"></a>
                <a href="img/abc8.jpeg" data-lightbox="mygallery"><img src="img/abc8.jpeg"></a>
                <a href="img/abc9.jpeg" data-lightbox="mygallery"><img src="img/abc9.jpeg"></a>
                <a href="img/abc10.jpeg" data-lightbox="mygallery"><img src="img/abc10.jpeg"></a>
                <a href="img/abc11.jpeg" data-lightbox="mygallery"><img src="img/abc11.jpeg"></a>

            </div>
        </div>
        </div>
    </section>

    <!--::our client part start::-->
    <section class="client_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Together We Grow</p>
                        <h2>Our  <span style="color:#00c424">Partners</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo owl-carousel">
                        <div class="single_client_logo">
                            <img src="img/Digital_India_logo.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/csc-academy.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/logo-wide.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/csc.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/Digital_India_logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our client part end::-->




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