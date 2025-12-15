<?php 
session_start();
// ambil input form
// lakukan validasi / cek isi input
// insert database

// === handling file upload
// ambil nama asli file (file.pdf)
$fileName = $_FILES['photo']['name'];
// kemudian pisahkan hanya ext saja (.pdf)
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
// validasi file (ext)
$allowExt = ['jpeg','jpg','JPEG','JPG','png','PNG'];
if(!in_array($ext, $allowExt)){
    $_SESSION['err']['photo'] = "Format photo tidak valid.";
    header('location:form.php');
    exit();
}
// buat unique string (jfi3298fhflksajdljf)
$uniqeName = uniqid();
// gabungkan unique string dengan ext (jfi3298fhflksajdljf.pdf)
$fileNameUnique = $uniqeName.'.'.$ext;
// nama file simpan ke DB
// file nya simpan ke dir dengan nama (jfi3298fhflksajdljf.pdf)
move_uploaded_file($_FILES['photo']['tmp_name'], 'photo/'.$fileNameUnique);