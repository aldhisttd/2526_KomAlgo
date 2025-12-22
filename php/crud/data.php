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
            <div class="col-7 p-5 border bg-light">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Jurusan</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $koneksi = mysqli_connect('localhost','root','','komalgo');
                            $query = "SELECT * FROM mahasiswa";
                            $obj = mysqli_query($koneksi, $query);
                            $dataArray = mysqli_fetch_all($obj, MYSQLI_ASSOC);
                            $no = 1;
                            foreach ($dataArray as $key => $value) {
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nim'] ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td>
                                        <?php 
                                            if($value['gender']==1){
                                                echo "Laki-laki";
                                            }else{
                                                echo "Perempuan";
                                            }
                                        ?>
                                    </td>
                                    <td><?= $value['jurusan'] ?></td>
                                    <td><img src="photo/<?= $value['photo'] ?>" width="50" alt=""></td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
unset($_SESSION['err']);
?>