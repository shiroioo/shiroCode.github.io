<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/custom.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <?php require_once"header.php"?>
    <section>
        <div class="form-container">
            <h1 class="titlee">Daftar Masuk</h1>
            <h1 class="titlee2">rekod kehadiran pelajar</h1>

            <form action="DB/logindb.php" method="post">
            <div class="control">
                <label for="icnum">No. Kad Pengenalan</label>
                <input type= "text" name="icnum" id="icnum" required>
            </div>
            <div class="control">
                <label for="psw">Kata Laluan</labe1>
                <input type="password" name="psw" id="psw" required>
            </div>
            <span><input type="checkbox" >Remember me.</span>
            <div class="control">
                <input type="submit" value="Login" name="login-btn">
            </div>
        </form>
        <div class="linkfor">
            <a href="#">Forgot Password</a>
        </div>
   </div>
</section>
<?php require_once"footer.php"?>
</body>
</html>