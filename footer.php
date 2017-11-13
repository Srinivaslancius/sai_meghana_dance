 <?php $getSiteSettings1 = getIndividualDetails(1,'site_settings','id')?>
 <div class="container">
            
            <div class="footer-btm">
                <div class="container">
                    <div class="row">
					  <div class="col-md-3 col-sm-3 col-xs-12">
					  </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <center><div class="create-by">
                                 <?php echo $getSiteSettings1['footer_text'];?><br>
								 © Copyright 2017 | Designed By <a target="_blank" href="https://www.lanciussolutions.com/"> Lancius Solutions</a>
                            </div></center>
                        </div>
						 <div class="col-md-3 col-sm-3 col-xs-12">
					  </div>
                    </div>
                </div>
            </div>
            <!-- End footer-btm --> 
        </div>