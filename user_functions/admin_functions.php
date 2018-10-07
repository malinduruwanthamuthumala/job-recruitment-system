<?php 
session_start();
require_once('../include/connection.php');

if(isset($_POST['d_company'])){

$sql="SELECT * FROM companies";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	echo $name=$row['name'];
	
	echo '<tr style="width:70%"> <td>'.$name.'</td>  <td><form action="admin_delete_company.php" method="post">
	<input type="hidden" value="'.$name.'" name="name"><input type="submit" name="submit" value="delete"></form></td>   </tr>';



}
}

if(isset($_POST['d_customer'])){
	$sql="SELECT * FROM users";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$fname=$row['Fname'];
	$lname=$row['Lname'];
	$id=$row['user_id'];

	
	echo '<tr style="width:70%"> <td>'.$fname." ".$lname.'</td>  <td><form action="admin_delete_employee.php" method="post">
	<input type="hidden" value="'.$id.'" name="id"><input type="submit" name="submit" value="delete"></form></td>   </tr>';



}
}


if(isset($_POST['v_reports'])){
	$sql="SELECT COUNT(user_id)
FROM users";



$sql1="SELECT COUNT(job_id)
FROM job_posts";

$sql2="SELECT COUNT(user_id)
FROM companies";


$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);
$result3=mysqli_query($con,$sql2);

$count = mysqli_fetch_array($result);
echo " number of users registerded are"."$count[0]";
echo "<br>";
$count1=mysqli_fetch_array($result1);

echo "number of jobs available job posts"."$count1[0]";


$count2=mysqli_fetch_array($result3);
echo "<br>";
echo "number of companies registered"."$count2[0]";

echo "<br>";

echo '<a href="../users/c_prof.php">back</a>';
}
 ?>