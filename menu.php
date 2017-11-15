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
                    <a class="navbar-brand" href="index.php"><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" class="logo logo-scrolled" alt="" style="height:98px;top: -15px;position: relative;"></a>
                </div>
				</div>
				<div class="col-sm-6">
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php $getAllMenuItems = "SELECT * FROM menu_items WHERE status=0 ";
                $getMenuItems = $conn->query($getAllMenuItems); ?>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="" data-out="">
                        <?php while($getCat = $getMenuItems->fetch_assoc()) {?>
                        <li><a href="/menu_url.php"><?php echo $getCat['menu_name']; ?></a></li>
                        <?php  } ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
            </div>
			</div>
        </nav>