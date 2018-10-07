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
$retriew=mysqli_query($con,$sql);
$row=mysqli_fetch_array($retriew);
  $_SESSION['cname']=$row['name'];
 $_SESSION['c_e-Mail']=$row['c_e_Mail'];
 ?>

 <html>
 <head>
 	<title></title>..
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body background="../images/d.jpg" >

<div class="header-text3">
			<form method="post" action="../user_functions/logout.php"><input type="submit" value="logout" name="logout" ></form>
			

			</div>

 	<div class="company_details">
 		<table>
 			<tr>
 		<h1>USER_ID :<?php echo $_SESSION['u_id'] ?></h1>
 		<h1>Company name:<?php echo $_SESSION['cname'] ?></h1>
 		<h3>manager in charge : <?php echo  $_SESSION['f_name']." ".$_SESSION['l_name']; ?></h2>
 		<h3>manager email address: <?php echo $_SESSION['email']; ?></h2>
 		<h3>company e mail adress: <?php echo  $_SESSION['c_e-Mail']; ?></h3>
 		<form method="post"><input type="submit" value="edit" name="submit1"  class="reset"></form>
 		</table>
 	</div>

 	<div class="c_pic_img">
 		<img src="../images/4.jpg" class="c_pic">
 		<br>
 		

 	</div>


 	<div class="company_functions">
 		<center>
 		<form method="post">
 		<input type="submit" value="post a job" name="p_job" class="submit" style="height:50px">
 		<br><br><br>
 		
 		<input type="submit" value="view requests" name="v-requests" class="submit"  style="height:50px">
 		<br><br><br>
 		<input type="submit" value="delete job posts" name="d_jobs" class="submit"  style="height:50px">
 		</form>
 		</center>
 		


 	</div>

 <?php 

if(isset($_POST['p_job'])){
	header("location:../user_functions/post_job.php");
}

if(isset($_POST['v-requests'])){
	header("location:../user_functions/view_cv.php");
}

if(isset($_POST['submit1'])){
	header("location:../user_functions/form_edit.php");

}
if(isset($_POST['d_jobs'])){
	header("location:../user_functions/delete_job.php");

}
  ?>
 
 </body>
 </html>
<?php  
}
else{
header("location: ../web.php");	

}
	
	?>
