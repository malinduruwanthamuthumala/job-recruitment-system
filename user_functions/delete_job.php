<?php 
session_start();

require_once('../include/connection.php');
$C_name=$_SESSION['cname'] ;
$sql="SELECT * FROM job_posts WHERE c_name='$C_name'";
$reult=mysqli_query($con,$sql);

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
	td{
		color:black;
	}
	table{
		background-color: white;
	}
	</style>
</head>
<body background="../images/d.jpg">

	<a href="../users/c_prof.php" style="margin-top:50px;color:red">BACK</a>;
<table border="" style="width:70%">


	<tr style="width:100%"> <th>job title</th>  <th>job id</th>     <th></th>  </tr>
</body>
</html>
<?php
while($row=mysqli_fetch_array($reult)){
	$title=$row['job_title'];
	$id=$row['job_id'];
	
	echo '<tr style="width:70%"> <td>'.$title.'</td> <td>'.$id.'</td>  <td><form action="deletejob.php" method="post">
	<input type="hidden" value="'.$id.'" name="jobid"><input type="submit" name="submit" value="delete" class="submit"></form></td>   </tr>';

}



 ?>