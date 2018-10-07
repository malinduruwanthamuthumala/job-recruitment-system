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
<body background="images/d.jpg">
<div class="header">


</div>

<div class="header-text">
	<div class="uppercase">
		<div class="navigation">
			<ul class="nav">
				<li><a href="web.php">HOME</a></li>
				<li><a href="#login2">LOGIN</a></li>
				<li><a href="user_functions/view_job.php">FIND JOBS</a></li>
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
<a href="user_registration.php">
	<div class="join">
	<h4 ><center>JOIN WITH US</center></h4>
</div></a>
</div>




<div class="login1" id="login2">
<h1 class="white">LOGIN HERE</h1>
<form action="login.php" method="post">
<label class="label white">email</label>
<br><br>

<input type="email" name="email" placeholder="email" class="input">
<br><br>
<label class="label white">password</label>
<br><br>
<input type="password"placeholder="password" name="pw"  class="input">
<br><br>
<input type="submit" name="submit" class="submit">
<input type="reset" class="reset">


<h3 class="white">NOT A MEMBER. REGISTER YOURSELF WITH US</h3>
<a href="user_registration.php">REGISTER HERE</a>
</form>


</div>





</body>




</html>