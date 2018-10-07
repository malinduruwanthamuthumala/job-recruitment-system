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
					<button onclick="myFunction()" name="d_customer" class="reset">delete customer</button>

					
<script>
function myFunction() {
  alert('if you delete the customer every details will be removed');
}
</script>
					
					<br>
					<input type="submit" value="delete company" name="d_company" class="reset">
					<br>
					<input type="submit" value="view reports" name="v_reports" class="reset">
					<br>



				</form>	


			</div>		
</body>
</html>