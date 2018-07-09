<?php 
session_start();
require_once('../include/connection.php');




 ?>
 <html>
 <head>
 	<title></title>

 </head>

 <body>
 	<form action="" method="post">
 		<label>first name</label>
 		<input type="text" name="fname" value="<?php echo $_SESSION['f_name'] ?> ">

 		<label>last name</label>
 		<input type="text" name="lname" value="<?php echo $_SESSION['l_name'] ?>">

 		<label>email</label>
 		<input type="text" name="m_email" value="<?php echo $_SESSION['email']?>">

 		<label>company email</label>
 		<input type="text" name="c_email" value="<?php echo  $_SESSION['c_e-Mail']; ?>">

 		<label>company name</label>
 		<input type="text" name="C_name" value="<?php echo $_SESSION['cname'] ?>">
 		<input type="submit" name="submit" >
 	</form>
 </body>
 <?php 
if(isset($_POST['submit'])){
	echo $fname=$_POST['fname'];
	 echo $lname=$_POST['lname'];
	$m_email=$_POST['m_email'];
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

	if(!$update){
		echo "failled";

	}

	if(!$update1){
		echo "failled";
	}


}


  ?>
 </html>