<?php 
session_start();
require_once('../include/connection.php');

$cname=$_SESSION['cname'];
$sql="SELECT * FROM job_cv where apply_company='$cname'";
$result=mysqli_query($con,$sql);
while($row=(mysqli_fetch_array($result))){

	echo $row['lname'];
	echo '<br>';
}
 ?>