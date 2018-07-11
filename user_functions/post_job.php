<?php 
session_start();
require_once('../include/connection.php');
$sql="SELECT * FROM job_types ";
$result=mysqli_query($con,$sql);
/*$row=mysqli_fetch_array($result);*/
 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 	<title></title>

 </head>
 <body background="../images/d.jpg">



 	
 		<div class="jobpost">
 			
 			<form action="upload.php" method="post" enctype="multipart/form-data"> 
 					<label>job title</label>
 					<input type="text" name="j_title"  class="input">
 					<br>
 					
 					<label>job type</label>
					<select   class="form-control" name="jtype" style="height:40px"> 
					<?php 
					while($row=mysqli_fetch_array($result)){
					echo	$type=$row['type'];
					echo	$value=$row['value'];
					
					echo '<option  value='."$value".'>'.$type.'</option>';
					 
					}
					?>
				</select>
					<br>
 					

 					<label>job description</label>
 					<input type="text" name="j_desc"  class="input" style="height:100px">
 					<br>
 					<label>upload your files </label>
 					<input type="file" name="file">
 					<br>	
 					<input type="submit" name="submit" value="submit" class="submit">
 			</form>
		</div>
	
 	

 </body>
 </html>