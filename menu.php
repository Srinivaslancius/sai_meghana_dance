<nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
			<div class="row">
			<div class="col-sm-6">
                <!-- Start Header Navigation -->
                <?php $getSiteSettings = getIndividualDetails(1,'site_settings','id'); ?>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" class="logo logo-scrolled" alt="" style="height:77px"></a>
                </div>
				</div>
				<div class="col-sm-6">
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="" data-out="">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="meghana.php">Meghana</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
            </div>
			</div>
        </nav>