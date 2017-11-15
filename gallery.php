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
          $getGallery = $getIndex->fetch_assoc(); 
    ?>
    <section class="page-title inner-baner1" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getGallery['image'] ?>);">
    
        <div class="container">
            <h2><?php echo $getGallery['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <!-- <li><a href="index.php">Home</a></li>
                <li class="active"><?php echo $getGallery['title']; ?></li> -->
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <section class="latest-gallery text-center">
     <h3 style="color:black">OUR <span class="color-pink"><?php echo $getGallery['title']; ?></span></h3>       
        <div class="container"> 
            <ul class="post-filter list-inline">
                <?php 
                    $getQry = "SELECT * FROM categories WHERE status = 0 ";
                    $excQry = $conn->query($getQry);
                ?>  
                    <?php while($getCat = $excQry->fetch_assoc()){ ?>  
                        <li class="<?php if($getCat['id'] == 1) { echo "active"; } ?>" data-filter=".<?php echo $getCat['id'];?>">
                            <span><?php echo $getCat['category_name'];?></span>
                        </li>
                   <?php  } ?>                
                
                <li data-filter=".Out-door-videos">
                    <span>Videos</span>
                </li>
            </ul>
            
            <div class="row masonary-layout filter-layout">                
                <?php $sql1 = "SELECT * FROM photo_gallery WHERE status = 0 AND id = 9 AND category_id = 1"; 
                    $res1 = $conn->query($sql1);
                    $row1 = $res1->fetch_assoc();
                ?>
                <div class="col-md-3 col-sm-3 col-xs-12"></div>
                <div class="col-md-6 col-sm-6 col-xs-12 <?php echo $row1['category_id'];?>">
                    <div class="single-item">
                        <div class="img-box">
                            <img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row1['image'] ?>" style="width:400px;height:400px;" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row1['image'] ?>" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="flaticon-add"></i></a>  
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12"></div>

                <?php $sql = "SELECT * FROM photo_gallery WHERE status = 0 AND category_id = 2"; 
                    $res = $conn->query($sql); while ($row = $res->fetch_assoc()) { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 <?php echo $row['category_id'];?>">
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
                <div class="col-md-4 col-sm-4 col-xs-12 <?php echo $row['category_id'];?>">
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
                <div class="col-md-4 col-sm-4 col-xs-12 filter-item Out-door-videos">
                    <div class="container">                        
                        <div>
                            <div class="row">
                            <?php $sql = "SELECT * FROM videos WHERE status = 0";
                                $res = $conn->query($sql); while($getVideos = $res->fetch_assoc()) {  ?>
                                <div class="col-sm-4">
                                    <?php 
                                    $url = $getVideos['url'];
                                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                    $vendid = $matches[1];
                                    ?>
                                    <iframe width="380" height="300" style="margin-bottom:20px"  src="https://www.youtube.com/embed/<?php echo $vendid ?>?rel=0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
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