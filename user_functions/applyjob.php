<?php 
session_start();
require_once('../include/connection.php');


 echo $_SESSION['apply_company']=$_POST['apply_c_name'];
 echo $_SESSION['job_id']=$_POST['job_id'];







 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div>
 	<div class="">
 		<form action="uploadcv.php" method="post" enctype="multipart/form-data">
 			<label>First Name</label>
 			<input type="text">

 			<label>Last name</label>
 			<input type="text">


 			<label>email</label>
 			<input type="text">

 			<label>upload your cv </label>
 			<input type="file" name="file">

 			<input type="submit" name="submit" value="submit">

 		</form>	


 	</div>

 </div>
 </body>
 </html>