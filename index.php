<!DOCTYPE html>
<html class="html">
<head>
    
    <?php include_once "head_content.php"; ?>

    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
    <!-- theme css -->
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- end Header Nav-brand-top -->

    <!-- endinject -->

</head>
<body>
    <!-- End top bar --> 
<section id="topbar">
       <?php include_once 'top_header.php'; ?>
    </section>
    <!--header start-->
    <header>
        <!-- Start Navigation -->
        <?php include_once 'menu.php'; ?>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--Main Slider-->
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line bs-slider-height" data-ride="carousel" data-pause="hover" data-interval="5000">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="images/gallery/010.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->

                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Welcome to sai meghna<br>dance school</h1>
                           
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item ">

                <!-- Slide Background -->
                <img src="images/gallery/210.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->

                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">DANCE IS THE HIDDEN<br>LANGUAGE OF SOUL</h1>
                            
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="images/gallery/212.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">To dance is to be out of yourself. Larger, more beautiful, more powerful</h1>
  

                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Slide -->


        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> 
    <!--Start welcome section-->
   
    <div class="sections-wrapper">
       <section class="sec-pad">
	   
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <h1>
                          <center><h3 style="color:black">WELCOME TO<span class="color-pink"> SAI MEGHNA DANCE SCHOOL</span></h3></center>
                        </h1>
						<div class="row">
						<div class="col-sm-5">
						<img src="images/gallery/11.jpg">
						</div>
						<div class="col-sm-7">
                        <p style="text-align:justify">
                          
				 Kuchipudi is a classical dance which was originated in the 12th century
						in Kuchipudi village of Andhra Pradesh. This splendid dance form is
						profoundly aesthetic and the experience of watching it is most
						exhilarating. Strictly adhering to the rules laid down in Bharata’s
						Natya Shastra ( science of Dancing) and Nandikeshwara’s Abhinaya
						Darpam (mirror of expresiion), Kuchipudi has all the salient features of
						a classical dance. All it’s compositions are set to Carnatic music and
						the songs are written in Telugu language.</p>
					
					<p style="text-align:justify">
					Kuchipudi is a perfect balance
						between 3 aspects – Nritta, Nritya and Naatya each being equivalent in
						nature. The Nritta is a rhythmic sequence that concludes a song or
						averse, the Nritya is where the rhythmic passages are followed by
						interpretation and Naatya is a complete dance drama with various
						characters and a story line. The charm of Kuchipudi lies in its
						graceful movements, intricate footwork, complicated rhythmic patterns
						and the rapid tempo and thus  distinguishes it from the  other dance
						forms.</p>
						</div>
					</div>
						
						
                    </div>

                 

                </div>

            </div>
        </section>
    <footer>
       <?php include_once 'footer.php'; ?>
    </footer>



<!-- Start js -->
<script src="js/plugins.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- Start slider js -->
<script src="js/slider.js"></script>
<!-- theme js -->
<script src="js/theme.js"></script>
<!-- Start wow js -->
<script src="js/wow.js"></script>
<!-- Start gallery js -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/gallery.js"></script>

<!-- end  -->
</body>
</html>

