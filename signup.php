<?php
session_start();
require_once("db.php");
require_once("functions.php");

if(isset($_POST["namesurname"])):
    $namesurname = security($_POST["namesurname"]);
else:
    $namesurname = "";
endif;

if(isset($_POST["username"])):
    $username = security($_POST["username"]);
else:
    $username = "";
endif;

if(isset($_POST["password"])):
    $password = security($_POST["password"]);
else:
    $password = "";
endif;

$md5 = uniqid(md5($password));

$query = $dbconnection->prepare("SELECT * FROM users WHERE KullaniciAdi = ?");
$query->execute([$username]);
if($query->rowcount() > 0 ):
    $_SESSION["error"] = " ❗ Bu kullanıcı adını kullanamazsınız.";
    header("Location:home.php");
    exit();
else:
        if(($namesurname != "") AND ($username != "") AND ($password != "")):
    else:
        $_SESSION["error"] = " ❌ Lütfen eksik alanları doldurunuz";
        header("Location:home.php");
        exit();
    endif;

    $useradd = $dbconnection->prepare("INSERT INTO users (adiSoyadi,KullaniciAdi,Sifre) 
    VALUES('$namesurname', '$username', '$md5')");
    $useradd->execute();
    $_SESSION["error"] = " ✅ Üye oldunuz.";
    header("Location:home.php");
    exit();
endif;
?>