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
    <link rel="stylesheet" href="fonts/flaticon.css" />



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
    <?php $getGallery = getIndividualDetails(8,'content_pages','id')?>
    <section class="page-title inner-baner1" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getGallery['image'] ?>);">
	
        <div class="container">
            <h2><?php echo $getGallery['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active"><?php echo $getGallery['title']; ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <section class="latest-gallery text-center">
	 <h3 style="color:black">OUR <span class="color-pink">GALLERY</span></h3>		
        <div class="container"> 
            <ul class="post-filter list-inline">
                <li class="active" data-filter=".filter-item">
                    <span>All</span>
                </li>
                <li data-filter=".Indoor-Services">
                    <span>Lavanya</span>
                </li>
                <li data-filter=".Old-Wiring-Faults">
                    <span>Rangapravesham</span>
                </li>
                <li data-filter=".Out-door-repairing">
                    <span>Lavanya with her Students</span>
                </li>
            </ul>
            <?php $sql = "SELECT * FROM photo_gallery WHERE status = 0 AND category_id = 1"; 
            $res = $conn->query($sql);?>
            <div class="row masonary-layout filter-layout">
                 <div class="col-md-4 col-sm-4 col-xs-12 filter-item">
                    <div class="single-item">
                        <div class="img-box">
                            <img src="uploads/photo_gallery_images/g1.jpg" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="img/lavanya/1.jpg" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="flaticon-add"></i></a>  
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <?php while ($row = $res->fetch_assoc()) { ?>
                 <div class="col-md-4 col-sm-4 col-xs-12 filter-item Indoor-Services">
                    <div class="single-item">
                        <div class="img-box">
                            <img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="flaticon-add"></i></a>  
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <?php } ?>

                <?php $sql = "SELECT * FROM photo_gallery WHERE status = 0 AND category_id = 2"; 
                    $res = $conn->query($sql); while ($row = $res->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-4 col-xs-12 filter-item Old-Wiring-Faults">
                     <div class="single-item">
                        <div class="img-box">
                            <img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="flaticon-add"></i></a>  
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>


                <?php $sql = "SELECT * FROM photo_gallery WHERE status = 0 AND category_id = 3"; 
                    $res = $conn->query($sql); while ($row = $res->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-4 col-xs-12 filter-item Out-door-repairing">
                     <div class="single-item">
                        <div class="img-box">
                            <img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="flaticon-add"></i></a>  
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
                
            </div><!-- /.row -->
        </div><!-- /.container -->
        </section>
        <!-- Start Footer -->    
    <footer>
                <?php include_once 'footer.php'; ?>

    </footer>


        <!-- End footer-btm --> 

        
        <script src="js/plugins.js"></script>
        <!-- jQuery js -->
        
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery ui js -->
        <script src="js/jquery-ui.js"></script>
        <!-- fancy box -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/isotope.js"></script>

        <script src="js/gallery.js"></script>


        
    </body>
</html>