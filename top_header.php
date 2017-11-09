<div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="contact-info pull-left">
                        <ul>
                            <?php $getSiteSettings = getIndividualDetails(1,'site_settings','id')?>
                            <li><i class="fa fa-phone"></i><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>" style="color:white;"><?php echo $getSiteSettingsData['mobile'];?></a></li>
                            <li><i class="fa fa-clock-o"></i><?php echo $getSiteSettings['open_timings']; ?></li>
                        </ul>
                    </div> <!-- /.contact-info -->
                    <div class="contact-info pull-right">
                        <ul>
                            <li><i class="fa fa-envelope-o"><a href="mailto:<?php echo $getSiteSettingsData['email'];?>" style="color:white;"></i><?php echo $getSiteSettings['email']; ?></a></li>
                        </ul>
                    </div> <!-- /.social -->
                </div>
            </div>
        </div>