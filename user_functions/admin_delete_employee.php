<?php 
session_start();
require_once('../include/connection.php');
$id=$_POST['id'];

$sql="DELETE FROM users WHERE user_id='$id'";

$result=mysqli_query($con,$sql);
header("location:../users/admin_prof.php");


 ?>