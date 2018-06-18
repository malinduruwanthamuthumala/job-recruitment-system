<?php
session_start();


echo $_SESSION['u_type'];
if($_SESSION['u_type']=='company'){
	header("location: users/company.php");
}
elseif($_SESSION['u_type']=='employee'){
	header("location: users/employee.php");
}




 ?>