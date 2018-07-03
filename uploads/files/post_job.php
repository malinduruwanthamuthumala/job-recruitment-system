<?php 
session_start();


require_once('../include/connection.php');
$sql="SELECT * FROM job_types ";
$result=mysqli_query($con,$sql);
/*$row=mysqli_fetch_array($result);*/


 ?>
 <html>
 <head>
 	<title></title>

 </head>
 <body>



 	<center>
 		<div>
 			
 			<form action="upload.php" method="post" enctype="multipart/form-data"> 
 					<label>job title</label>
 					<input type="text" name="j_title">
 					<br>
 					
 					<label>job type</label>
					<select   class="form-control" name="jtype">
					<?php 
					while($row=mysqli_fetch_array($result)){
					echo	$type=$row['type'];
					echo	$value=$row['value'];
					
					echo '<option  value='.$value.'>'.$type.'</option>';
					 
					}

					?>
				</select>
					<br>
 					

 					<label>job description</label>
 					<input type="text" name="j_desc">
 					<br>
 					<input type="file" name="file">
 					<br>	
 					<input type="submit" name="submit" value="submit">
 			</form>
		</div>
	</center>
 	

 </body>
 </html>