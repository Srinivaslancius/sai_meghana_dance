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
    <?php $getIndex =getAllDataCheckActive1('content_pages','0',8);
                                  $getGallery = $getIndex->fetch_assoc(); ?>

    <section class="container-fluid page-title">
        <div class="row">
            <img src="<?php echo $base_url .'uploads/content_images/'.$getGallery['image'] ?>" class="img-responsive">
        </div>
        <?php $getChooseData2 = getAllDataCheckActive1('menu_items','0',3);
                $getChoose2 = $getChooseData2->fetch_assoc(); ?>
        <div class="top-header-div">
            <p><?php echo $getChoose2['menu_name']; ?></p>
        </div>
    </section>
    <!--End Page Title-->

    <section class="latest-gallery text-center">
     <h3 style="color:black">OUR <span class="color-pink"><?php echo $getGallery['title']; ?></span></h3>       
        <div class="container"> 
            <ul class="post-filter list-inline">
                <li data-filter=".firststep">
                    <span>Guru</span>
                </li>
                <li data-filter=".Indoor-Services">
                    <span>Meghana</span>
                </li>
                <li data-filter=".Old-Wiring-Faults">
                    <span>Students Rangapravesham</span>
                </li>
                <li data-filter=".Out-door-repairing">
                    <span>Videos</span>
                </li>
            </ul>

            <?php $getgalleImg =getAllDataCheckActive1('content_pages','0',12);
                  $getimg = $getgalleImg->fetch_assoc(); 
            ?>

            <div class="firstimg"><img src="<?php echo $base_url .'uploads/content_images/'.$getimg['image'] ?>"></div>
            
            <div class="row masonary-layout filter-layout">  

                <?php $sql = "SELECT * FROM photo_gallery WHERE status = 0 AND category_id = 1"; 
                 $res = $conn->query($sql);?>  
                <?php while ($row = $res->fetch_assoc()) { ?>
                 <div class="col-md-4 col-sm-4 col-xs-12 firststep">
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
                <div class="col-md-4 col-sm-4 col-xs-12 Indoor-Services">
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
                <div class="col-md-4 col-sm-4 col-xs-12 Old-Wiring-Faults">
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

                <?php $sql = "SELECT * FROM videos WHERE status = 0";
                    $res = $conn->query($sql); while($getVideos = $res->fetch_assoc()) {  ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 Out-door-repairing">
                         <div class="col-sm-4">
                            <?php 
                            $url = $getVideos['url'];
                            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                            $vendid = $matches[1];
                            ?>
                            <iframe width="380" height="300" style="margin-bottom:20px"  src="https://www.youtube.com/embed/<?php echo $vendid ?>?rel=0" allowfullscreen></iframe>
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