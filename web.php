<?php 
session_start();
session_destroy();
session_start();
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">


</div>

<div class="header-text">
	<div class="uppercase">
		<div class="navbar">
			<ul class="nav">
				<li><a href="">HOME</a></li>
				<li><a href="">LOGIN</a></li>
				<li><a href="">FIND JOBS</a></li>
				<li><a href="">ABOUT US</a></li>
				<li><a href="">CONTACT</a></li>

			</ul>	

		</div>


	</div>
</div>


<div class="header-text1">

<h1 class="header-area"><center>START YOUR CAREER WITH US </center></h1>
<center><p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit</p></center>

</div>




<div class="login1">
<h1>LOGIN HERE</h1>
<form action="login.php" method="post">
<label>email</label>
<br><br>

<input type="email" name="email" placeholder="email">
<br><br>
<label>password</label>
<br><br>
<input type="password"placeholder="password" name="pw" >
<br>
<input type="submit" class="sub" name="submit">
<input type="reset" class="rest">

</form>


</div>

</body>
</html>