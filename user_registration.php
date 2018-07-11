<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="images/d.jpg">
<div class="signin registerform" >
		<h2>USER REGISTRATION </h2>
		<form action="user_submit.php" method="post" accept-charset="utf-8" target="" class="form-group" id="register_form_user">
			<label>First Name</label>
			<input type="" name="fname"  id="fname" placeholder=""  class="input">
			
			<br><br>

			<label>last name</label>
			<input type="" name="lname"   id="lname" class="input">
			
			
		
			
			<br><br>

			<label>Email</label>
			<input type="" name="email"  id="email"  class="input">
			
			<br><br>

			<label>Password</label>
			<input type="password" name="pw"  id="password"  class="input">
			
			<br><br>

			<label> Retype Password</label>
			<input type="password" name=""   id="retype_password"  class="input">
			
			<br><br>

			<label>telephone</label>
			<input type="" name="tp"  id="tel"  class="input">
			
			<br><br>

			<label>Usertype</label>
			<select   class="form-control" name="utype" style="width:200px; height:30px">
			
				<option value="company"  class="input">company</option>
				<option value="employee"  class="input" >employee</option>
				
			
				
			</select>
			<label></label>
			<br>
			<button type="submit" name="submit" class="submit">SUBMIT</button>
			<button type="Reset" class="reset">RESET</button>
		</form>
	
	</div>
</body>
</html>