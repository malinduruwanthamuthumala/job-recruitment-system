<?php
session_start() ;
require_once('include/connection.php');
 $usemail=$_POST['email'];
$pw=$_POST['pw'];
$encrypt_key="sagdg&^$$%$#%GJHGKFJHHGF";
$password_encrypt = hash('sha256',$pw.$encrypt_key);
if(empty($usemail) || empty($pw)){
	header("location: index.php?empty fields");
}else
	{
	$sql="SELECT * FROM users WHERE email='$usemail'";
	$result=mysqli_query($con,$sql);
	$numrow=mysqli_num_rows($result);
	if($numrow < 0){
		header("location: index.php?login=error");
		exit();
	}else{
		if($row=mysqli_fetch_assoc($result)){
			$passw=$row['password'];
			if($passw!=$password_encrypt){
			echo '<script language="javascript">';
			echo 'alert("incorrect  password")';
			echo '</script>';
				
				
			}
				elseif($passw==$password_encrypt){
					echo $_SESSION['u_type']=$row['usertype'];
					$_SESSION['u_id']=$row['user_id'];
					 $_SESSION['f_name']=$row['Fname'];
					$_SESSION['l_name']=$row['Lname'];
					$_SESSION['email']=$row['email'];
					
					header("location:user_check.php?");
					exit();  
				}
			
		}
	}
}
