<?php 
session_start();
require_once('../include/connection.php');

 $_FILES['file']['name'];
if(isset($_FILES['file'])){
$name=$_FILES['file']['name'];/*getting the name of  the file*/
$tmp_name=$_FILES['file']['tmp_name'];


if(isset($name)){
	if(!empty($name)){

$location='../uploads/files/';

$upload=move_uploaded_file($tmp_name,$location.$name) ;
$_SESSION['u_p_cv_location']=$upload;
if($upload){
	if(isset($_POST['submit'])){


	$job_title=$_POST['j_title'];
	
	 $job_type=$_POST['jtype'];
	
	 $c_name= $_SESSION['cname'];
	
	 $description=$_POST['j_desc'];
	
	 $user_id=$_SESSION['u_id'];
	
 	$attachment_loc=$location.$name;

	$attachment_name=$name;

	$sql="INSERT INTO job_posts (job_title,type, c_name, description, user_id,attachment_loc, attachment_name) 
	VALUES ('$job_title','$job_type','$c_name','$description','$user_id','$attachment_loc','$attachment_name')";

	$insert=mysqli_query($con,$sql);

	if(!$insert){
		echo "insertion failled";
	}
}
}
	}else{
		echo "please upload a file to cintinnue";
	
}
}
}



 ?>