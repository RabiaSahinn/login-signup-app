<?php
session_start();
require_once("db.php");
require_once("functions.php");



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

if(($username != "") AND ($password != "")):
else:
    $_SESSION["error"] = " ❗ Lütfen eksik alanları doldurunuz";
    header("Location:index.php");
    exit();
endif;


$query2 = $dbconnection->prepare("SELECT * FROM users WHERE KullaniciAdi = ? and Sifre = ?");
$query2->execute([$username, $md5]);
$login = $query2->rowCount();
if($login > 0):
    $_SESSION["login"] = true;
    $_SESSION["kullanici_adi"] = $username;
    $_SESSION["adsoyad"] = $usernamesurname;
    header("Location:account.php");
    exit();
else:
    $_SESSION["error"] = " ❌ Kullanıcı adı veya şifre hatalı.";
    header("Location:index.php");
    exit();
endif;
?>