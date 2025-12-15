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
    
    <div class="container mt-5">
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-5 bg-light p-5 border border-primary">

                    <div class="form-group">
                        <label class="" for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="" for="">Photo</label>
                        <input type="file" name="photo" class="form-control <?= isset($_SESSION['err']['photo'])?'is-invalid':null ?>">
                        <div class="invalid-feedback">
                            <?= isset($_SESSION['err']['photo'])?$_SESSION['err']['photo']:null ?>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
session_destroy();
?>