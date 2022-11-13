<?php
session_start();
session_destroy();

session_start();
$_SESSION["error"] = " ✅ Çıkış Yaptınız.";
header("Location:index.php");
exit();
?>