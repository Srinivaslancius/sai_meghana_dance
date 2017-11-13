<?php include_once 'admin_includes/main_header.php'; ?>
      <div class="site-content">
        <div class="row">
          <a href="admin_users.php">
            <div class="col-md-4 col-sm-5">
              <div class="widget widget-tile-2 bg-warning m-b-30">
                <div class="wt-content p-a-20 p-b-50">
                  <div class="wt-title">Admin Users</div>
                  <div class="wt-number"><?php echo getRowsCount('admin_users')?></div>
                </div>
                <div class="wt-icon">
                  <i class="zmdi zmdi-accounts"></i>
                </div>
              </div>
            </div>
          </a>
          <a href="banners.php">
            <div class="col-md-4 col-sm-4">
              <div class="widget widget-tile-2 bg-danger m-b-30">
                <div class="wt-content p-a-20 p-b-50">
                  <div class="wt-title">Banners</div>
                  <div class="wt-number"><?php echo getRowsCount('banners')?></div>
                </div>
                <div class="wt-icon">
                  <i class="zmdi zmdi-collection-image zmdi-hc-fw"></i>
                </div>
              </div>
            </div>
          </a>
          <a href="photo_gallery.php">
            <div class="col-md-4 col-sm-5">
              <div class="widget widget-tile-2 bg-primary m-b-30">
                <div class="wt-content p-a-20 p-b-50">
                  <div class="wt-title">Gallery</div>
                  <div class="wt-number"><?php echo getRowsCount('photo_gallery')?></div>
                </div>
                <div class="wt-icon">
                  <i class="zmdi zmdi-image"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
     <?php include_once 'admin_includes/footer.php'; ?>
     