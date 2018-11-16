<?php
session_start();
// logout session
session_destroy();
session_start();
$_SESSION['message']='logout';
header("location:../login.php");
?>
