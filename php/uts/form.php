<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- <form action="proses.php" method="post">
        <div>
            <label for="">Kode : </label> <br>
            <input type="text" name="kode">
        </div>
        <div>
            <label for="">Nama Barang : </label> <br>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Tanggal Masuk : </label> <br>
            <input type="date" name="date">
        </div>
        <div>
            <label for="">Stok : </label> <br>
            <input type="number" name="stok">
        </div>
        <div>
            <label for="">Harga : </label> <br>
            <input type="number" name="harga">
        </div>
        <div>
            <label for="">Kategori : </label> <br>
            <select name="kategori">
                <option value="sandang">Sandang</option>
                <option value="pangan">Pangan</option>
            </select>
        </div>

        <div>
            <label for="">Deskrips : </label> <br>
            <textarea name="desc"></textarea>
        </div>

        <div>
            <button type="submit">Proses</button>
        </div>
    </form> -->

    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input name="kode" type="text"></td>
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