<?php 

// echo $_POST['kode']." adalah beras (" . $_POST['kategori'].")";

echo $_POST['kode']." adalah beras (".$_POST['kategori'].")" ;
echo "<br>";
echo "Masuk pada ".$_POST['tgl']." (".$_POST['stok'].")";
echo "<br>";
echo "Total harga Rp ".$_POST['stok']*$_POST['hrg'];
echo "<br>";
echo $_POST['desc'];