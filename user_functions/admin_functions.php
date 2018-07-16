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


if(isset($_POST['d_company'])){
	
}



 ?>