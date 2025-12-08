<?php

$var_biasa = "Budi";
echo $var_biasa;

$var_array = ["Budi", "Adi"];
echo $var_array[1];

$ary_assoc = [
    "nama" => "Budi",
    "umur" => "21",
];

echo $ary_assoc['nama'];

$nama_buah = [];
$nama_buah[] = "Mangga";
$nama_buah[] = "Apel";

echo $nama_buah[0];
echo $nama_buah[1];

echo "<br>";

$aray_asc_mobil = [];
$aray_asc_mobil['Merek'] = "Toyota";
$aray_asc_mobil['Tahun'] = "2025";

echo $aray_asc_mobil['Tahun'];
