<?php 
session_start();
require_once('../include/connection.php');
 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 	<title></title>

 </head>

 <body background="../images/d.jpg">
 	<div class="editform">
 	<form action="" method="post">
 		<label>first name</label>
 		<input type="text" name="fname" value="<?php echo $_SESSION['f_name'] ?> "  class="input">
 		<br>
 		<label>last name</label>
 		<input type="text" name="lname" value="<?php echo $_SESSION['l_name'] ?>"  class="input">
 		<br>
 		<label>email</label>
 		<input type="text" name="m_email" value="<?php echo $_SESSION['email']?>"  class="input">
 		<br>
 		<label>company email</label>
 		<input type="text" name="c_email" value="<?php echo  $_SESSION['c_e-Mail']; ?>"  class="input">

 		<label>company name</label>
 		<input type="text" name="C_name" value="<?php echo $_SESSION['cname'] ?>"  class="input">
 		<input type="submit" name="submit"  class="submit">
 	</form>
 </div>
 </body>
 <?php 
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$_SESSION['f_name']= $fname;
	$lname=$_POST['lname'];
	$_SESSION['l_name']=$lname;
	$m_email=$_POST['m_email'];
	$_SESSION['email']=$m_email;
	$c_mail=$_POST['c_email'];
	$C_name=$_POST['C_name'];
	$id=$_SESSION['u_id'];
	$sql="UPDATE users
	SET Fname='$fname',
	 Lname='$lname',
	 email='$m_email'
	WHERE user_id='$id'";
	$sql4="UPDATE job_posts SET c_name='$C_name' WHERE user_id='$id'";
	$sql3="UPDATE companies
SET name='$C_name',
c_e_Mail='$c_mail'
WHERE user_id = '$id'";
	$update=mysqli_query($con,$sql);
	$update1=mysqli_query($con,$sql4);
	$update2=mysqli_query($con,$sql3);
	if(!$update){
		echo "failled";
	}
	
	if(!$update1){
		echo "failled";
	}
header("location:../users/company.php");
}
  ?>
 </html>