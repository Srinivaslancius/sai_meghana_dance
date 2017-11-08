<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$pid = $_GET['pid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            if($_FILES["fileToUpload"]["name"]!='') {
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/photo_gallery_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('image','photo_gallery','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE `photo_gallery` SET category_id = '$category_id', image = '$fileToUpload', status='$status' WHERE id = '$pid' ";
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `photo_gallery` SET category_id = '$category_id', status='$status' WHERE id = '$pid' ";
                if($conn->query($sql) === TRUE){
                   echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=success'</script>";
                } else {
                   echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=fail'</script>";
                }
            }
          }
?>
<?php $getPhotoGalleries = getDataFromTables('photo_gallery',$status=NULL,'id',$pid,$activeStatus=NULL,$activeTop=NULL);
$getPhotoGalleryData = $getPhotoGalleries->fetch_assoc();
 ?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Photo Gallery</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <?php $getCategories = getAllDataCheckActive('categories','0');?>
                  <div class="form-group" id="service_category_id">
                    <label for="form-control-3" class="control-label">Choose your Categories</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Categories</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getPhotoGalleryData['category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                      <?php } ?>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Image</label>
                    <img src="<?php echo $base_url . 'uploads/photo_gallery_images/'.$getPhotoGalleryData['image'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getPhotoGalleryData['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>