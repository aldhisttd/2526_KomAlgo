<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
  
    <h1>Menu</h1>
    <ul>
        <li><a href="form.php">Form</a></li>
        <li><a href="data.php">Data</a></li>
    </ul>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 p-5 border border-primary bg-light">
                <h3>Form Edit</h3>
                <?php 
                $koneksi = mysqli_connect('localhost','root','','komalgo');
                $id = $_GET['id'];
                $query = "SELECT * FROM mahasiswa WHERE id=$id";
                $obj = mysqli_query($koneksi, $query);
                $dtEdit = mysqli_fetch_array($obj);
                $nim = $dtEdit['nim'];
                $nama = $dtEdit['nama'];
                $gender = $dtEdit['gender'];
                $jurusan = $dtEdit['jurusan'];
                $photolama = $dtEdit['photo'];
                ?>
                <form action="proses/edit_proses.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="photolama" value="<?= $photolama ?>">
                    <div class="form-group mb-2">
                        <label for="">NIM</label>
                        <input type="text" name="nim" value="<?= $nim ?>" class="form-control <?= (isset($_SESSION['err']['nim'])?'is-invalid':null) ?>">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['nim']  ?>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama</label>
                        <input value="<?= $nama ?>" type="text" name="nama" class="form-control <?= (isset($_SESSION['err']['nama'])?'is-invalid':null) ?>">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['nama']  ?>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Gender</label><br>
                        <input type="radio" name="gender" <?= ($gender==1)?'checked':null ?> value="1"> Laki-laki
                        <input type="radio" name="gender" <?= ($gender==0)?'checked':null ?> value="0"> Perempuan
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="Teknik Informatika" <?= ($jurusan=="Teknik Informatika")?'selected':null ?>>Teknik Informatika</option>
                            <option value="Teknik Sipil" <?= ($jurusan=="Teknik Sipil")?'selected':null ?>>Teknik Sipil</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Photo <small>(biarkan kosong kalau photo tidak di edit)</small></label> 
                        <input type="file" name="photo" class="form-control <?= (isset($_SESSION['err']['photo'])?'is-invalid':null) ?>">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['photo']  ?>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
unset($_SESSION['err']);
?>