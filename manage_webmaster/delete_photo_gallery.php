<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$pid = $_GET['pid'];
//echo $music_number;
$target_dir = '../uploads/photo_gallery_images/';
$getImgUnlink = getImageUnlink('image','photo_gallery','id',$pid,$target_dir);
$qry = "DELETE FROM photo_gallery WHERE id ='$pid'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Image Deleted Successfully');window.location.href='photo_gallery.php';</script>";
} else {
   echo "<script>alert('Image Not Deleted');window.location.href='photo_gallery.php';</script>";
}
?>