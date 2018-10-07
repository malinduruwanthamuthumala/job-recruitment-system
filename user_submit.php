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
$password_encrypt = hash('$password.$encrypt_key');


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

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
mysqli_close($con);
 ?>