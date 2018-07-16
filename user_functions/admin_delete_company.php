<?php 
session_start();
require_once('../include/connection.php');
$name=$_POST['name'];
$sql="DELETE FROM companies WHERE name='$name'";
$sql1="DELETE FROM job_posts WHERE	c_name='$name'";
$result=mysqli_query($con,$sql);
header("location:../users/admin_prof.php");


 ?>