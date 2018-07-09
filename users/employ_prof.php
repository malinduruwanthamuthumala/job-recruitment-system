<?php 
session_start();
require_once('../include/connection.php');
if(isset($_SESSION['u_type'])){
	
	if($_SESSION['u_type']!='employee'){
		echo "you are not allowed";
		header("location: ../user_check.php");
	}

 $fname=$_SESSION['f_name'];
 $lname=$_SESSION['l_name'];
 $email=$_SESSION['email'];
 $u_type=$_SESSION['u_type'];
 $id=$_SESSION['u_id'];

}

 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 	<title></title>
 </head>
 <body>
 <div class="company_details">
 		<table>
 			<tr>
 		<h1>USER_ID :<?php echo $_SESSION['u_id'] ?></h1>
 		
 		<h3>name : <?php echo  $_SESSION['f_name']." ".$_SESSION['l_name']; ?><a href="#" style="color:blue; font-size:15px;">.   edit</a></h2>
 		<h3> email address: <?php echo $_SESSION['email']; ?><a href="#" style="color:blue; font-size:15px;">.   edit</a></h2>
 		
 		</table>
 	</div>

 	<div class="c_pic_img">
 		<img src="../images/4.jpg" class="c_pic">
 		<br>
 		<input type="submit" class="p_submit" name="submit1" value="update profile photo">


 	</div>

 	<div class="employee_functions">
 		<center>
 		<form method="post">
 		<input type="submit" value="view jobs" name="view" >
 		
 		</form>
 		</center>
 		


 	</div>
 	<?php 
if(isset($_POST['view'])){
	header("location: ../user_functions/view_job.php");
}
 ?>
 </body>




 
 </html>