<?php 
session_start();
if(isset($_SESSION['u_type'])){
	
require_once('../include/connection.php');
$sql="SELECT * FROM job_types ";
$result=mysqli_query($con,$sql);


 ?>

 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 	<title></title>
 </head>
 <body>

 <form method="post" >
 	 <?php 
while($row=mysqli_fetch_array($result)){
						$type=$row['type'];
						$value=$row['value'];
					
					echo '<input name='.$value.' type="submit" value="'."$type".'">';
					
					 




					}


  ?>
 </form>

<table border="1" style="width:100%">
	<tr> <th>job title</th> <th>company name</th> <th>description</th> <th>attachments</th> </tr>
<?php 
if(isset($_POST['data_entry'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='data_entry'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'"><tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 




}
}

if(isset($_POST['web_application'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='web_application'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'"><tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 





}
}
if(isset($_POST['accounting'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='accounting'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'"><tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 





}
}

if(isset($_POST['HR'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='HR'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'">"<tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 




}
}

if(isset($_POST['software_engineering'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='software_engineering'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'"><tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 





}


}

if(isset($_POST['bank'])){
	

	





$sql="SELECT * FROM job_posts WHERE type='bank'";
	$result=mysqli_query($con,$sql);

	
	
	while($row=mysqli_fetch_array($result)){
					
	echo '<form action="applyjob.php" method="post"><input type="hidden" name="job_id" value="'.$row['job_id'].'"><tr>  <td>'.$row['job_title'].'</td> <td><input type="hidden" name="apply_c_name" value="'.$row['c_name'].'">'.$row['c_name'].'</td> <td>'.$row['description'].'</td> <td><a href="'.$row['attachment_loc'].'">'.$row['attachment_name'].'</a></td> <td><input type="submit" value="apply now" name="submit"></td>  </tr></form>';				 





}
}		
	

}
else{
	echo "please login to continue";
	header("location:../web.php");
}

 

?> 
</table>


  
 </body>
 </html>