<?php
session_start();


 $_SESSION['u_type'];
if($_SESSION['u_type']=='company'){
	header("location: users/company.php");
}
elseif($_SESSION['u_type']=='employee'){
	header("location: users/employ_prof.php");
}
elseif($_SESSION['u_type']=='admin'){
	
	header("location: users/admin_prof.php");
}




 ?>