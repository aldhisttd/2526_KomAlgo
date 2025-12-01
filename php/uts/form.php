<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses2.php" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td>
                    <input name="kode" type="text" style="border-color:
                        <?php 
                            if(isset($_SESSION['err_kode'])){
                                echo "red";
                            }
                        ?>
                    "> <br>
                    <span style="color: red;">
                        <?php 
                            if(isset($_SESSION['err_kode'])){
                                echo $_SESSION['err_kode'];
                            }
                        ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input name="nama" type="text"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input name="tgl" type="date"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input name="stok" type="number"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input name="hrg" type="number"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <select name="kategori">
                        <option value="Sandang">Sandang</option>
                        <option value="Pangan">Pangan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td>
                    <textarea name="desc" id=""></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Proses</button>
                </td>
            </tr>
            
        </table>
    </form>

</body>
</html>

<?php 
session_destroy();

?>