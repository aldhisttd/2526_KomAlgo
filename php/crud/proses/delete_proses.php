<?php 
$id = $_POST['id'];
$koneksi = mysqli_connect('localhost','root','','komalgo');
$query = "DELETE FROM mahasiswa where id=$id";
unlink('../photo/'.$_POST['photo']);
mysqli_query($koneksi, $query);
header('location:../data.php');