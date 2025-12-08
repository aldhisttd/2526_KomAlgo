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
}

if($nama==''){
    $_SESSION['err_nama'] = "Nama tidak boleh kosong";
}

if($tgl==''){
    $_SESSION['err_tgl'] = "Tanggal tidak boleh kosong";
}

if($stok==''){
    $_SESSION['err_stok'] = "Stok tidak boleh kosong";
}

if($hrg==''){
    $_SESSION['err_hrg'] = "Harga tidak boleh kosong";
}

if($desc==''){
    $_SESSION['err_desc'] = "Deskripsi tidak boleh kosong";
}

if(
    $kode=='' || $nama=='' || $tgl=='' ||
    $stok=='' || $hrg=='' || $desc==''
){
    header('location:form.php');
    exit();  
}
