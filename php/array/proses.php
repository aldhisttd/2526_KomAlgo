<?php
session_start();
$index = 0;

if(isset($_SESSION['data'])){
    $index = count($_SESSION['data']);
}
$_SESSION['data'][$index]['kode'] = $_POST['kode'];
$_SESSION['data'][$index]['nama'] = $_POST['nama'];
echo count($_SESSION['data']);
?>

<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
    </tr>

    <?php
    foreach ($_SESSION['data'] as $key => $value) {
    ?>
        <tr>
            <td><?= $value['kode']  ?></td>
            <td><?= $value['nama']  ?></td>
        </tr>
    <?php
    }
    ?>


</table>