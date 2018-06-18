<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="signin">
		<h2>USER REGISTRATION </h2>
		<form action="user_submit.php" method="post" accept-charset="utf-8" target="" class="form-group" id="register_form_user">
			<label>First Name</label>
			<input type="" name="fname"  id="fname" placeholder="">
			


			<label>last name</label>
			<input type="" name="lname"   id="lname">
			
			
		
			
			<br><br>

			<label>Email</label>
			<input type="" name="email"  id="email">
			
			<br><br>

			<label>Password</label>
			<input type="password" name="pw"  id="password">
			
			<br><br>

			<label> Retype Password</label>
			<input type="password" name=""   id="retype_password">
			
			<br><br>

			<label>telephone</label>
			<input type="" name="tp"  id="tel">
			
			<br><br>

			<label>Usertype</label>
			<select   class="form-control" name="utype">
			
				<option value="company" >company</option>
				<option value="employee" >employee</option>
				
			
				
			</select>
			<label></label>
			<br>
			<button type="submit" name="submit">SUBMIT</button>
			<button type="Reset" >RESET</button>
		</form>
	
	</div>
</body>
</html>