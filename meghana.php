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
    <?php $getMegahanaData = getIndividualDetails(2,'content_pages','id')?>    
    <section class="page-title inner-baner" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getMegahanaData['image'] ?>);">
        <div class="container">            
            <h2><?php echo $getMegahanaData['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active"><?php echo $getMegahanaData['title']; ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <section id="our-team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                    <div class="team-single">                      
                        <div class="player-name text-center">
                           <h3 style="color:black">ABOUT <span class="color-pink"> MEGHANA YAMMANUR</span></h3>
                           <div class="row" style="padding-left:10px">
                           <div class="col-sm-4">
                            <?php $getMegahanaDataImg = getIndividualDetails(10,'content_pages','id')?> 
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
