<?php
session_start();
require_once("functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <head>
            <title>Giriş Yap</title>
            <meta charset="utf-8">
            <meta name="Robots" content="index,follow">
            <meta name="googlebot">
            <meta name="revisit-ofter" content="7 Days">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <H3 class="text">Giriş Yap</H3>
            <?php if(session("error")): ?>
            <div class="div" ><?php echo session("error"); ?></div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Kullanıcı Adı" class="input"> </br>
                <input type="password" name="password" placeholder="Şifre" class="input"></br>
                <input type="submit" value="Giriş Yap" class="button">
                <a href="home.php" class="link">Hesap Oluştur</a>
            </form>
        </div>
    </body>
</html>
<?php
$_SESSION["error"] = null;
?>