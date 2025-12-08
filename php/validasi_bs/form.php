<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="proses.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="text" class="form-control <?php echo isset($_SESSION['err_email'])?'is-invalid':null ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                            <?php echo isset($_SESSION['err_email'])?$_SESSION['err_email']:null ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control <?php echo isset($_SESSION['err_password'])?'is-invalid':null ?>" id="exampleInputPassword1">
                        <div class="invalid-feedback">
                            <?php echo isset($_SESSION['err_password'])?$_SESSION['err_password']:null ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>

<?php 
session_destroy();
?>