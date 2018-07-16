<?php 

if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['u_type']);
    unset($_SESSION['u_id']);
    unset( $_SESSION['f_name']);
    unset($_SESSION['email']);
    unset($_SESSION['u_type']);
    header('location:../index.php');
}


 ?>