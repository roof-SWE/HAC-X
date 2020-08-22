<?php 
	session_start();

	// variable declaration
	$email = "";
	$gender = "";
	$bio  = "";
	$errors = array(); 

	// connect to database////////////////////////////////////////////////// 
	
   $nameserver= "localhost"; // name server 
   $db_name= "love eat"; // database name 
   $db_user= "root"; // database username
   $db_pass= "usbw"; // database password
//   error_reporting(E_ALL); // display the error 
ini_set('display_errors', 0);
   // Create connection with mysql 
   $db = new mysqli($nameserver, $db_user, $db_pass,$db_name);
   $conn = $db;
   $mysqli = $db;
   // Check connection
   if ($db->connect_error) {
       die("Connection failed: " . $db->connect_error);
   }

 

?>