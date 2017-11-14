<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['vid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
          $title = $_POST['title'];
          $status = $_POST['status'];
          $url = $_POST['url'];
          $sql = "UPDATE `videos` SET title = '$title',url = '$url', status='$status' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='videos.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='videos.php?msg=fail'</script>";
          }
      }
?>
<?php $getVideos = getDataFromTables('videos',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
$getVideosData = $getVideos->fetch_assoc();
 ?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Videos</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" required value="<?php echo $getVideosData['title'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">URL</label>
                    <input type="url" class="form-control" id="form-control-2" name="url" required value="<?php echo $getVideosData['url'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getVideosData['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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