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

    <?php $getAboutUs1 =getAllDataCheckActive1('content_pages','0',1);
                                  $getAboutUs = $getAboutUs1->fetch_assoc(); ?>

    <section class="container-fluid page-title">
        <div class="row">
            <img src="<?php echo $base_url .'uploads/content_images/'.$getAboutUs['image'] ?>" class="img-responsive">
        </div>
        <?php $getChooseData2 = getAllDataCheckActive1('menu_items','0',2);
                $getChoose2 = $getChooseData2->fetch_assoc(); ?>
        <div class="top-header-div">
            <p><?php echo $getChoose2['menu_name']; ?></p>
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
