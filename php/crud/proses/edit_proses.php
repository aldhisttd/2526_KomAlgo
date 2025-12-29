<?php 
//ambil semua value
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$jurusan = $_POST['jurusan'];
$photolama = $_POST['photolama'];




session_start();
$_SESSION['err'] = [];
// validasi
if($nim==''){
    $_SESSION['err']['nim'] = "NIM tidak boleh kosong";
}

if($nama==''){
    $_SESSION['err']['nama'] = "Nama tidak boleh kosong";
}

$photoBaru = false;
if($_FILES['photo']['name']!=''){
    $fileName = $_FILES['photo']['name'];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowExt = ['jpeg','jpg','png','JPEG','JPG','PNG'];
    if(!in_array($ext, $allowExt)){
        $_SESSION['err']['photo'] = "Format file harus berupa gambar";
    }else{
        $photoBaru = true;
        $photo = uniqid().'.'.$ext;
    }
}

if(count($_SESSION['err'])>0){
    header('location:../edit.php?id='.$id);
    exit();
}

//validasi
//insert ke db
//--php harus konek
$koneksi = mysqli_connect('localhost','root','','komalgo');
//--buat query
$sql = "
    UPDATE mahasiswa 
    SET 
        nim=$nim, 
        nama='$nama', 
        gender=$gender,
        jurusan='$jurusan'
    WHERE id=$id;
";
//--jalankan query

//upload file
if($photoBaru){
    $sql = "
        UPDATE mahasiswa 
        SET 
            nim=$nim, 
            nama='$nama', 
            gender=$gender,
            jurusan='$jurusan',
            photo='$photo'
        WHERE id=$id;
    ";
    unlink('../photo/'.$photolama);
    move_uploaded_file($_FILES['photo']['tmp_name'],'../photo/'.$photo);
}

mysqli_query($koneksi, $sql);
$_SESSION['succ'] = "Data mahasiswa (".$nama.") baru berhasil diubah.";
header('location:../data.php');