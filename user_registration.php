<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body background="images/d.jpg">
<div class="signin registerform" >
		<h2>USER REGISTRATION </h2>
		<form action="user_registration.php" method="post" accept-charset="utf-8" target="" class="form-group" id="register_form_user" onsubmit="return checkfunction()" name="reg">
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
			<select   class="" name="utype" style="width:200px; height:30px">
			
				<option value="company"  class="input">company</option>
				<option value="employee"  class="input" >employee</option>
				<option value="admin"  class="input" >admin</option>
				<option value="accountant"  class="input" >accountant</option>
				<option value="manager"  class="input" >manager</option>
				
			
				
			</select>
			<label></label>
			<br>
			<button type="submit" name="submit" class="submit" onclick="checkfunction()">SUBMIT</button>
			<button type="Reset" class="reset">RESET</button>
		</form>
	
	</div>
	<script type="text/javascript">

	function checkfunction()
	{	var x = document.forms["reg"]["fname"].value;
		var y = document.forms["reg"]["pw"].value;
		var z = document.forms["reg"]["lname"].value;
		var m = document.forms["reg"]["email"].value;
		
		if (x == ""){
			alert("Please fill the first name feild");
			return false;
		}

		if(z==""){
			alert("please fill the last name field")
			return false;
		}

		if (y==""){
			alert("Please fill the password feild");
			return false;
		}

		
		else if(m==""){
			alert("please fill the email ")
			return false;

		}
		



}


	</script>
	<?php 

require_once('include/connection.php');
 

if (isset($_POST['submit'])){

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $password=$_POST['pw'];
 $user_type=$_POST['utype'];
 $tel=$_POST['tp'];

$encrypt_key="sagdg&^$$%$#%GJHGKFJHHGF";
$password_encrypt = hash('sha256',$password.$encrypt_key);


$querry="INSERT INTO users (Fname, Lname, email, password,usertype, telephone)
 VALUES ('$fname', '$lname', '$email', '$password_encrypt', '$user_type', '$tel')";
$insert=mysqli_query($con,$querry);
 
if(!$insert){
	echo" failled";
}else{
	header("location:index.php");
}
}



	 ?>
</body>
</html>
<?php 
mysqli_close($con);
 ?>