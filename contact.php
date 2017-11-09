<!DOCTYPE html>
<html class="html">
<head>
    <?php include_once "head_content.php"; ?> 
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
    <!-- theme css -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    


</head>
<body>
    <!--header start-->
	<section id="topbar">
       <?php include_once 'top_header.php'; ?>
    </section>
    <header>
        <!-- Start Navigation -->
       <?php include_once 'menu.php'; ?>
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--Page Title-->
    <section class="page-title inner-baner3">
        <div class="container">
            <h2>contact us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active">contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sections-wrapper sec-pad blog-back-bg">
        <div class="container">
            <div class="section-title title-padd-btm">
			  <center><h3 style="color:black">GET IN<span class="color-pink"> TOUCH</span></h3></center>
                
             <!--   <p class="wd-50">
                    Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                </p>-->
            </div> 

            <div class="contact-form-container">              
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-12 pull-right">
                       <form action=""> 
                            <p><input type="text" name="name" placeholder="Name"></p>
                            <p><input type="text" name="email" placeholder="Email"></p>
                            <p><input type="text" name="subject" placeholder="Subject"></p>
                            <p><textarea name="comments" placeholder="Comments"></textarea></p>
                            <button type="submit" class="theme-btn btn-lg" style="background-color:#c90000">
                            <span>Submit Now</span>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div> 
                            </div>

                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                        SaiMeghana Dance Schools<br>
                                        Gachibowli,<br>
                                        Hyderabad, India
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-15"></div>
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div> 
                            </div>

                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                        +91 120 4255611, <br>+91 120 4585611
                                    </p>
                                </div>
                            </div>
                        </div><!-- tt-contact -->
                        <div class="spacer-15"></div>
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div> 
                            </div>
                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                    classicaldance@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div><!-- tt-contact -->
                    </div><!-- col -->
                </div><!-- row -->
            </div>
        </div>
    </div>

    <!-- Stat Footer -->    
    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>

<!-- End footer --> 

<!-- Start js -->
<script src="js/plugins.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.html"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.html"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.html"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/theme.js"></script>
<script src="js/validate.js"></script> <!-- Form Validator JS -->
<script src="js/wow.js"></script>
<!-- end  -->
</body>
</html>
