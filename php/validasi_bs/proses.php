<?php 

$email = $_POST['email'];
$password = $_POST['password'];

session_start();
if($email==''){
    $_SESSION['err_email'] = "Email tidak boleh kosong";
}

if($password==''){
    $_SESSION['err_password'] = "Password tidak boleh kosong";
}

if($email=='' || $password==''){
    header('location:form.php');
    exit();
}