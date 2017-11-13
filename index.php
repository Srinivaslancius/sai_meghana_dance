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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
    <?php $getban = "SELECT * FROM banners WHERE status = 0 AND id =9"; $getban2 = $conn->query($getban); $getBannersData1=$getban2->fetch_assoc(); ?>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <img src="<?php echo $base_url . 'uploads/banner_images/'.$getBannersData1['banner'] ?>" alt=""  class="slide-image"/>
          <div class="carousel-caption">
          <h1 data-animation="animated flipInX"><?php echo $getBannersData1['title'];?></h1>
          </div>
        </div>
        <?php $sql = 'SELECT * FROM `banners` WHERE id NOT IN (SELECT id FROM `banners` WHERE id=9) AND status = 0';
        $getBanners = $conn->query($sql); while($getBannersData = $getBanners->fetch_assoc()) { ?>
        <div class="item">
         <img src="<?php echo $base_url . 'uploads/banner_images/'.$getBannersData['banner'] ?>" alt=""  class="slide-image"/>
          <div class="carousel-caption">
          <h1 data-animation="animated flipInX"><?php echo $getBannersData['title'];?></h1>
          </div>
        </div>
        <?php } ?>
      </div>


      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

</div>
    <!--Start welcome section-->
   <?php $getIndex = getIndividualDetails(3,'content_pages','id')?>
    <div class="sections-wrapper">
       <section class="sec-pad">
     
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <?php echo $getIndex['description']; ?>
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

