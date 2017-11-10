<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Kolkata");
 
$setcon = 1;
if($setcon == 2) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loanmamu";
} else {
	$servername = "192.168.0.111";	
	$username = "root";
	$password = "root";
	$dbname = "sai_meghana_dance";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
 
$base_url = "http://localhost/sai_meghana_dance/";


?>