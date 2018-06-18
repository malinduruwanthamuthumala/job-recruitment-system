<?php 
session_start();
require_once('../include/connection.php');

if(isset($_SESSION['u_type'])){
	
	if($_SESSION['u_type']!='company'){
		
		header("location: ../user_check.php");
	}

echo $fname=$_SESSION['f_name'];
echo $lname=$_SESSION['l_name'];
echo $email=$_SESSION['email'];
echo $u_type=$_SESSION['u_type'];








}
 ?>