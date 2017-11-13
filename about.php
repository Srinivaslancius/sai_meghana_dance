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
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--Page Title-->
    <?php $getIndex =getAllDataCheckActive1('content_pages','0',1);
          $getAboutUs = $getIndex->fetch_assoc(); ?>
    ?>
    <section class="page-title inner-baner2" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getAboutUs['image'] ?>);">
        <div class="container">
            <h2><?php echo $getAboutUs['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php echo $getAboutUs['title']; ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <div class="sections-wrapper">
       <section class="sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <?php echo $getAboutUs['description']; ?>
                    </div>

                 

                </div>

            </div>
        </section>
	<!--	<section id="testimonials">
        <div class="overlay sec-pad">
            <div class="container">
                <div class="section-title text-center">
                    <h2 style="color:white">WELCOME TO<br><span class="color-pink">SAIMEGHANA DANCE SCHOOL</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      
                            <div class="item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>  
 <p style="color:white">
                          Kuchipudi is a classical dance which was originated in the 12th century
in Kuchipudi village of Andhra Pradesh. This splendid dance form is
profoundly aesthetic and the experience of watching it is most
exhilarating. Strictly adhering to the rules laid down in Bharata’s
Natya Shastra ( science of Dancing) and Nandikeshwara’s Abhinaya
Darpam (mirror of expresiion), Kuchipudi has all the salient features of
a classical dance. All it’s compositions are set to Carnatic music and
the songs are written in Telugu language.</p>								
                                   <p style="color:white">Kuchipudi is a perfect balance
between 3 aspects – Nritta, Nritya and Naatya each being equivalent in
nature. The Nritta is a rhythmic sequence that concludes a song or
averse, the Nritya is where the rhythmic passages are followed by
interpretation and Naatya is a complete dance drama with various
characters and a story line. The charm of Kuchipudi lies in its
graceful movements, intricate footwork, complicated rhythmic patterns
and the rapid tempo and thus  distinguishes it from the  other dance
forms.


                        </p>
                              
                             <!--   <div class="client-info-box">
                                    <div class="client-img">
                                        <img src="images/resource/client-img.jpg" alt="">
                                    </div>
                                    <p class="name">
                                        <span>John Smith </span> <br> ( c e o )
                                    </p>
                                </div>
                            </div>                         
                          
                       
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end testimonial -->
     
     </div>

    
    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>



    <!-- Start js -->
    <script src="js/plugins.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/wow.js"></script>
    
    <!-- end  -->
</body>
</html>
