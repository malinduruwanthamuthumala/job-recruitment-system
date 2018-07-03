<?php 
session_start();
require_once('../include/connection.php');

if(isset($_SESSION['u_type'])){
	
	if($_SESSION['u_type']!='company'){
		echo "you are not allowed";
		header("location: ../user_check.php");
	}

 $fname=$_SESSION['f_name'];
 $lname=$_SESSION['l_name'];
 $email=$_SESSION['email'];
 $u_type=$_SESSION['u_type'];
 $id=$_SESSION['u_id'];

$sql="SELECT * FROM companies WHERE user_id='$id'";
$result=mysqli_query($con,$sql);
 $result_check=mysqli_num_rows($result);
if($result_check == 0){
	echo '<center>';
	echo '<div class="c_name">';
	echo '<h1>You are logging to a company profile to enhance the services please fill the following fields</h1>';
	echo '<form action="" method="post">';
	echo ' <input type="text" placeholder="Enter your company name" name="C_name">';
	echo ' <input type="text" placeholder="Enter your company email" name="c_e-Mail">';
	echo '<input type="submit" name="submit">';
	echo '</form>';
	echo '</div>';
	echo '</center>';
	if(isset($_POST['submit'])){
	 $C_name=$_POST['C_name'];
	 echo $c_e_Mail=$_POST['c_e-Mail'];
	$sql_new="INSERT INTO companies (user_id,name,c_e_Mail) VALUES ('$id','$C_name','$c_e_Mail')";
	$result_new=mysqli_query($con,$sql_new);
	  header("location: c_prof.php");
}
}

else{

header("location: c_prof.php");
}
}




 ?>

 