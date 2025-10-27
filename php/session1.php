<?php 
// private variable
// $nama = "Budi";
// echo $nama;

// global var
session_start();
$_SESSION['nama'] = "Tika";
session_destroy();
// $_SESSION['umur'] = "12";
// $_SESSION['login'] = true;