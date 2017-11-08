<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getPhotoGalleryData = getAllDataWithActiveRecent('photo_gallery'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_photo_gallery.php" style="float:right">Add Photo Gallery</a>
            <h3 class="m-t-0 m-b-5">Photo Gallery</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getPhotoGalleryData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $getCategories = getAllDataCheckActive('categories','0'); while($getCategories1 = $getCategories->fetch_assoc()) { if($row['category_id'] == $getCategories1['id']) { echo $getCategories1['category_name']; } } ?></td>
                    <td><img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$row['image'] ?>" height="100" width="100"/></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='photo_gallery'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='photo_gallery'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_photo_gallery.php?pid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_photo_gallery.php?pid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                  </tr>
                  <?php  $i++; } ?>                  
                </tbody>               
              </table>
            </div>
          </div>
        </div>   
       </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>