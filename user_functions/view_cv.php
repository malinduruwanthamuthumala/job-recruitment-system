<?php 
session_start();
require_once('../include/connection.php');

$cname=$_SESSION['cname'];
$sql="SELECT * FROM job_cv where apply_company='$cname'";
$result=mysqli_query($con,$sql);
?>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" style="width:100%">
	<tr>  <th>job id</th> <th>Name</th> <th>email</th> <th>view cv</th> </tr>
<?php
while($row=(mysqli_fetch_array($result))){
	echo '<tr>  <td>'.$row['job_id'].'</td>  <td>'. $row['fname']." ".$row['email'].'</td>  <td>'. $row['email'].'</td>  <td><a href="'.$row['location'].'">'.$row['cv_name'].'</a></td> </tr>';
}
echo '<a href="../users/c_prof.php">HOME</a>';
 ?>

</table>
</body>
</html>


