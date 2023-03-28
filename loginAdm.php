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
            <form action="/admin.php" method="post">
                <label for="username" class="judul2">Login Admin</label>
                <input type="text" class="input1" id="username" name="username" placeholder="username"> <br/> 
                <input type="password" class="input2" name="password" placeholder="password"> <br/> 
                <div class="line"></div>
                <input type="submit" class="button" value="Login"> <br/>
                <a href="loginPeg.php" class="link2">login sebagai pegawai!</a>
            </form>
        </div>
    </body>
</html>
