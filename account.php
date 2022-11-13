<?php
session_start();
require_once("db.php");
require_once("functions.php");

if(!isset($_SESSION["login"]) || $_SESSION["login"] == false):
    header("Location:home.php");
    exit();
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <head>
            <title>Hesabım</title>
            <meta charset="utf-8">
            <meta name="Robots" content="index,follow">
            <meta name="googlebot">
            <meta name="revisit-ofter" content="7 Days">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="style.css">
    </head>
<body>
<div class="box">
    <h5 class="account"> Merhaba  <?php echo session("kullanici_adi"); ?> </h5>
    <form action="logout.php">
        <input type="submit" value="Çıkış Yap" class="logout">
    </form>
</div>
</body>
</html>

