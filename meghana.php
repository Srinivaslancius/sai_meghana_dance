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
    <!--header end-->
	<section id="topbar">
       <?php include_once 'top_header.php'; ?>
    </section>
 <header>
        <!-- Start Navigation -->
        <?php include_once 'menu.php'; ?>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--Page Title-->
    <?php $getAboutUs = getIndividualDetails(2,'content_pages','id')?>
    <section class="page-title inner-baner">
        <div class="container">
            <h2><?php echo $getAboutUs['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active"><?php echo $getAboutUs['title']; ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <section id="our-team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="team-single">
                      <?php echo $getAboutUs['description']; ?>
                </div>
                <!--End Single team-->
               
                <!--End Single team-->

                
                <!--End Single team-->

                <!--End Single team-->
                
            </div>
        </div>
    </section>
    <!--End our-team-area-->
    <!-- Stat Footer -->    
    
  <footer>
       <?php include_once 'footer.php'; ?>
    </footer>


    <!-- End footer-btm --> 

    <!-- Start js -->
    <script src="js/plugins.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/wow.js"></script>
    <!-- end  -->
</body>
</html>
