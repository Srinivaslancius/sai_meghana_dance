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
<?php
//ob_start();
$getSiteSettings = getIndividualDetails(1,'site_settings','id');
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['comments'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];

$dataem = $getSiteSettings["email"];
//$to = "srinivas@lanciussolutions.com";
$to = "$dataem";
$subject = "SaiMeghana Dance Schools - Contact Us ";
$message = "";
$message .= "<style>
        .body{
    width:100% !important; 
    margin:0 !important; 
    padding:0 !important; 
    -webkit-text-size-adjust:none;
    -ms-text-size-adjust:none; 
    background-color:#FFFFFF;
    font-style:normal;
    }
    .header{
    background-color:#c90000;
    color:white;
    width:100%;
    }
    .content{
    background-color:#FBFCFC;
    color:#17202A;
    width:100%;
    padding-top:15px;
    padding-bottom;15px;
    text-align:justify;
    font-size:14px;
    line-height:18px;
    font-style:normal;
    }
    h3{
    color: #c90000;}
    .footer{
    background-color:#c90000;
    color:white;
    width:100%;
    padding-top:9px;
    padding-bottom:5px;
    }
    .logo-responsive{
    max-width: 100%;
    height: auto !important;
    }
    @media screen and (min-width: 480px) {
        .content{
        width:50%;
        }
        .header{
        width:50%;
        }
        .footer{
        width:50%;
        }
        .logo-responsive{
        max-width: 100%;
        height: auto !important;
        }
    }
    </style>";

$message .= "<html><head><title>SaiMeghana Dance Schools</title></head>
<body>
        <div class='container header'>
            <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                </div>
                <div class='col-lg-8 col-md-8 col-sm-8'>
                <center><h2>".$getSiteSettings['admin_title']."</h2></center>
                </div>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                    
                </div>
            </div>
        </div>
        <div class='container content'>
            <h3>User Feed Back Information!</h3>
            <h4>Name: </h4><p>".$name."</p>
            <h4>Email: </h4><p>".$email."</p>
            <h4>Subject: </h4><p>".$_POST['subject']."</p>
            <h4>Message: </h4><p>".$_POST['comments']."</p>  
        </div>
        <div class='container footer'>
            <center>".$getSiteSettings['footer_text']."</center>
        </div>
    </body>
</html>";

//echo $message; die;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
    echo  "<script>alert('Thank You For Your feedback');window.location.href('contact.php');</script>";
}

}
?>
<body>
    <!--header start-->
	<section id="topbar">
       <?php include_once 'top_header.php'; ?>
    </section>
    <header>
        <!-- Start Navigation -->
       <?php include_once 'menu.php'; ?>
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--Page Title-->
    <?php $getContactData = getIndividualDetails(9,'content_pages','id')?>
    <section class="page-title inner-baner3" style="background-image:url(<?php echo $base_url .'uploads/content_images/'.$getContactData['image'] ?>);">
        <div class="container">
            <h2><?php echo $getContactData['title']; ?></h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php echo $getContactData['title']; ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sections-wrapper sec-pad blog-back-bg">
        <div class="container">
            <div class="section-title title-padd-btm">
			  <center><h3 style="color:black">GET IN<span class="color-pink"> TOUCH</span></h3></center>
                
             <!--   <p class="wd-50">
                    Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                </p>-->
            </div> 

            <div class="contact-form-container">              
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-12 pull-right">
                       <form method="post"> 
                            <p><input type="text" name="name" placeholder="Name" required></p>
                            <p><input type="email" name="email" placeholder="Email" required></p>
                            <p><input type="text" name="subject" placeholder="Subject" required></p>
                            <p><textarea name="comments" placeholder="Comments" required></textarea></p>
                            <button type="submit" class="theme-btn btn-lg" style="background-color:#c90000">
                            <span>Submit Now</span>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div> 
                            </div>

                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                        <?php echo $getSiteSettings['address'];?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-15"></div>
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div> 
                            </div>

                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                        <?php echo $getSiteSettings['mobile'];?>
                                    </p>
                                </div>
                            </div>
                        </div><!-- tt-contact -->
                        <div class="spacer-15"></div>
                        <div class="tt-contact">
                            <div class="tt-contact-icon-outer">
                                <div class="tt-contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div> 
                            </div>
                            <div class="tt-contact-info">
                                <div class="simple-text">
                                    <p style="font-weight:600">
                                    <?php echo $getSiteSettings['email'];?>
                                    </p>
                                </div>
                            </div>
                        </div><!-- tt-contact -->
                    </div><!-- col -->
                </div><!-- row -->
            </div>
        </div>
    </div>

    <!-- Stat Footer -->    
    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>

<!-- End footer --> 

<!-- Start js -->
<script src="js/plugins.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.html"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.html"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.html"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/theme.js"></script>
<script src="js/validate.js"></script> <!-- Form Validator JS -->
<script src="js/wow.js"></script>
<!-- end  -->
</body>
</html>
