<?php 
//ambil semua input dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$stok = $_POST['stok'];
$hrg = $_POST['hrg'];
$kategori = $_POST['kategori'];
$desc = $_POST['desc'];

// cek semua inputan nya/validasi
session_start();
if($kode==''){
    $_SESSION['err_kode'] = "Kode tidak boleh kosong";
    header('location:form.php');
}

// insert ke DB


// tampilkan datanya
