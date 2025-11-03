<?php
// if(isset($_POST['submit'])){
//     echo $_POST['username'];
//     echo $_POST['password'];
// }
?>
<!-- <form action="" method="post"> -->
<form action="proses/form_post_proses.php" method="post">

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