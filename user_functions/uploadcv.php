<?php 
session_start();
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


	 $apply_company=$_SESSION['apply_company'];
	 $job_id=$_SESSION['job_id'];
	echo $fname=$_SESSION['f_name'];
	 $lname=$_SESSION['l_name'];
	 $email=$_SESSION['email'];
	$cv_name=$name;
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
		echo "please upload a file to continnue";
	
}
}
}



 ?>