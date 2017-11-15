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
          $getAboutUs = $getIndex->fetch_assoc(); 
    ?>
    <section class="page-title inner-baner2" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getAboutUs['image'] ?>);">
        <div class="container">
            <h2>About Us</h2>
            <ul class="bread-crumb clearfix">
                <!-- <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li> -->
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <div class="sections-wrapper">
       <section class="sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <h3 style="color:black">ABOUT <span class="color-pink"><?php echo $getAboutUs['title']; ?></span></h3>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <?php echo $getAboutUs['description']; ?>
                    </div>
                </div>
            </div>
        </section>	
     
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
