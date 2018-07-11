<?php 
require_once('include/connection.php');
 

if (isset($_POST['submit'])){

echo $fname=$_POST['fname'];
echo $lname=$_POST['lname'];
echo $email=$_POST['email'];
echo $password=$_POST['pw'];
echo $user_type=$_POST['utype'];
echo $tel=$_POST['tp'];

$encrypt_key="sagdg&^$$%$#%GJHGKFJHHGF";
$password_encrypt = hash('sha256',$password.$encrypt_key);


$querry="INSERT INTO users (Fname, Lname, email, password,usertype, telephone)
 VALUES ('$fname', '$lname', '$email', '$password_encrypt', '$user_type', '$tel')";
$insert=mysqli_query($con,$querry);
 
if(!$insert){
	echo" failled";
}else{
	header("location:web.php");
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