<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

<title>SaiMeghana Dance School</title> 