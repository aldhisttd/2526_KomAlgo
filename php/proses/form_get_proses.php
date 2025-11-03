<?php 

// var_dump(isset($_GET['submit']));

if(!isset($_GET['submit'])){
    header("location:../form_post.php");
}else{
    echo $_GET['username'];
    echo $_GET['password'];
}

