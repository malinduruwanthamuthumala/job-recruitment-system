<?php 
session_start();
require_once('../include/connection.php');
 ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title></title>
</head>
<body background="../images/d.jpg">
<div class="header-text3">
			<form method="post" action="../user_functions/logout.php"><input type="submit" value="logout" name="logout"></form>
			</div>


			<div>
				<form action="../user_functions/admin_functions.php" method="post">
					<input type="submit" value="delete customer" name="d_customer" class="reset">
					<br>
					<input type="submit" value="delete company" name="d_company" class="reset">
					<br>
					<input type="submit" value="view reports" name="d_company" class="reset">
					<br>



				</form>	


			</div>		
</body>
</html>