<?php
try
{
    $dbconnection = new PDO("mysql:host=localhost;dbname=login;charset=utf8","root","");
}

catch(PDOException $e)
{
    $e->getMessage();
    die();
}

$userquery = $dbconnection->prepare("SELECT * FROM users");
$userquery->execute();
$userowcount = $userquery->rowCount();
$record = $userquery->fetch(PDO::FETCH_ASSOC);
if($userowcount > 0):
    $userıd = $record["id"];
    $usernamesurname = $record["adiSoyadi"];
    $username = $record["KullaniciAdi"];
    $userpassword = $record["Sifre"];
else:
    echo "Kullanıcı sorgusu hatası";
endif;

?>