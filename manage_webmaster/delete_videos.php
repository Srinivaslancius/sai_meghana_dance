<?php include_once 'admin_includes/main_header.php'; ?>
<?php 
$id = $_GET['vid'];
$qry = "DELETE FROM videos WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Video Deleted Successfully');window.location.href='videos.php';</script>";
} else {
   echo "<script>alert('Video Not Deleted');window.location.href='videos.php';</script>";
}
?>