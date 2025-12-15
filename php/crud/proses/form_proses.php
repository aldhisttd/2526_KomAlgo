<?php 
//ambil semua value
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$jurusan = $_POST['jurusan'];

$fileName = $_FILES['photo']['name'];
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$photo = uniqid().'.'.$ext;

//validasi
//insert ke db
//--php harus konek
$koneksi = mysqli_connect('localhost','root','','komalgo');
//--buat query
$sql = "INSERT INTO mahasiswa(nim,nama,gender,jurusan,photo) VALUES($nim,'$nama',$gender,'$jurusan','$photo')";
//--jalankan query
mysqli_query($koneksi, $sql);
//upload file
move_uploaded_file($_FILES['photo']['tmp_name'],'../photo/'.$photo);
header('location:../data.php');