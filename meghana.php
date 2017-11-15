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

    <?php $getMegahanaData1 =getAllDataCheckActive1('content_pages','0',2);
                                  $getMegahanaData = $getMegahanaData1->fetch_assoc(); ?>

    <section class="container-fluid page-title">
        <div class="row">
            <img src="<?php echo $base_url .'uploads/content_images/'.$getMegahanaData['image'] ?>" class="img-responsive">
        </div>
        <?php $getChooseData2 = getAllDataCheckActive1('menu_items','0',3);
                $getChoose2 = $getChooseData2->fetch_assoc(); ?>
        <div class="top-header-div">
            <p><?php echo $getChoose2['menu_name']; ?></p>
        </div>
    </section>
    <!--End Page Title-->


    <section id="our-team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                <div class="team-single">                      
                        <div class="player-name text-center">
                           <h3 style="color:black">ABOUT <span class="color-pink"> <?php echo $getMegahanaData['title']; ?></span></h3>
                           <div class="row" style="padding-left:10px">
                           <div class="col-sm-4">
                            <?php $getIndex1 =getAllDataCheckActive1('content_pages','0',10);
                                  $getMegahanaDataImg = $getIndex1->fetch_assoc(); ?>
                            <img src="<?php echo $base_url .'uploads/content_images/'.$getMegahanaDataImg['image'] ?>" alt="">
                           </div>
                            <?php echo $getMegahanaData['description']; ?>
                        </div>
                    </div>
                </div>
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
