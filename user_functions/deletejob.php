<?php 
session_start();
require_once('../include/connection.php');
echo $job_id=$_POST['jobid'];
$sql="DELETE FROM job_posts WHERE job_id='$job_id'";
$result=mysqli_query($con,$sql);

 ?>