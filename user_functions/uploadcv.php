<?php 
session_start();
require_once('../include/connection.php');

require_once('../include/connection.php');
 $_FILES['file']['name'];
if(isset($_FILES['file'])){
$name=$_FILES['file']['name'];/*getting the name of  the file*/
$tmp_name=$_FILES['file']['tmp_name'];


if(isset($name)){
	if(!empty($name)){

$location='../uploads/cv/';

$upload=move_uploaded_file($tmp_name,$location.$name) ;
$_SESSION['u_p_cv_location']=$upload;
if($upload){
	if(isset($_POST['submit'])){


	$_SESSION['apply_company']=$apply_company;
	$_SESSION['job_id']=$job_id;
	$_SESSION['']=$fname;
	$lname=$_SESSION[''];
	$email=$_SESSION[''];
	$cv_name=$_SESSION[''];
	$attachment_loc=$location.$name;



	$sql="INSERT INTO job_cv (job_id,apply_company,fname, lname, email,	cv_name, location) 
	VALUES ('$job_id','$apply_company','$fname','$lname','$email','$name','$attachment_loc')";

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