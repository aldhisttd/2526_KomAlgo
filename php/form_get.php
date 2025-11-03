<?php
// if(isset($_GET['submit'])){
//     echo $_GET['username'];
//     echo $_GET['password'];
// }
?>
<!-- <form action="" method="post"> -->
<form action="proses/form_get_proses.php" method="get">

    <div>
        <label for="">Username</label> <br>
        <input type="text" name="username">
    </div>
    <div>
        <label for="">Password</label> <br>
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit" name="submit">Proses</button>
    </div>
</form>