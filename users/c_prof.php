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
  $_SESSION['name']=$row['name'];
  echo $_SESSION['c_e-Mail']=$row['c_e_Mail'];
 ?>

 <html>
 <head>
 	<title></title>..
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>

 	



 	<div class="company_details">
 		<table>
 			<tr>
 		<h1>USER_ID :<?php echo $_SESSION['u_id'] ?></h1>
 		<h1>Company name:<?php echo $_SESSION['name'] ?><a href="#" style="color:blue;font-size:15px">.   edit</a></h1>
 		<h3>manager in charge : <?php echo  $_SESSION['f_name']." ".$_SESSION['l_name']; ?><a href="#" style="color:blue; font-size:15px;">.   edit</a></h2>
 		<h3>manager email address: <?php echo $_SESSION['email']; ?><a href="#" style="color:blue; font-size:15px;">.   edit</a></h2>
 		<h3>company e mail adress: <?php echo  $_SESSION['c_e-Mail']; ?><a href="#" style="color:blue; font-size:15px;">.   edit</a></h3>
 		</table>
 	</div>

 	<div class="c_pic_img">
 		<img src="../images/4.jpg" class="c_pic">
 		<br>
 		<input type="submit" class="p_submit" name="submit1" value="update profile photo">


 	</div>


 	<div class="company_functions">
 		<center>
 		<form method="post">
 		<input type="submit" value="post a job" name="p_job" >
 		<br><br><br>
 		<input type="submit" value="view reports" name="v_reports">
 		<br><br><br>
 		<input type="submit" value="view requests" name="v-requests">
 		<br><br><br>
 		<input type="submit" value="delete job posts" name="d_jobs">
 		</form>
 		</center>
 		


 	</div>

 <?php 

if(isset($_POST['p_job'])){
	header("location:../user_functions/post_job.php");
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
