<?php 
//ambil semua value
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$jurusan = $_POST['jurusan'];

session_start();
$_SESSION['err'] = [];
// validasi
if($nim==''){
    $_SESSION['err']['nim'] = "NIM tidak boleh kosong";
}

if($nama==''){
    $_SESSION['err']['nama'] = "Nama tidak boleh kosong";
}

if($_FILES['photo']['name']==''){
    $_SESSION['err']['photo'] = "File photo tidak boleh kosong";
}else{
  //photo dipilih
    $fileName = $_FILES['photo']['name'];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowExt = ['jpeg','jpg','png','JPEG','JPG','PNG'];
    if(!in_array($ext, $allowExt)){
        $_SESSION['err']['photo'] = "Format file harus berupa gambar";
    }else{
        $photo = uniqid().'.'.$ext;
    }
}

if(count($_SESSION['err'])>0){
    header('location:../form.php');
    exit();
}

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