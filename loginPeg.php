<?php
require 'functions.php';

if (isset($_GET["login"])){

    $username = $_GET["username"];
    $password = $_GET["password"];

    $result = mysqli_query($conn,"SELECT * FROM user where username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]){
            header("Location: http://localhost/a/pegawai.php");
            exit;
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Login Kula Kita </title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="/image/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body style="background-color: #3C2A21;">
        <div class="container">
            <form action="" method="get">
                <label class="judul1" for="username">Login Pegawai</label>
                <?php if (isset($error)) : ?>
                    <p style="color : red; font-style : italic"> username atau password salah</p>
                <?php endif; ?>
                <input type="text"  class="input1" id="username" name="username" placeholder="username"> <br/> 
                <input type="password"  class="input2" name="password" placeholder="password"> <br/> 
                <div class="line"></div>
                <input type="submit" class="button" value="Login"> <br/>
                <a href="loginAdm.php" class="link1">login sebagai admin!</a>  
            </form>
        </div>
    </body>
</html>
