<?php
session_start();
session_destroy();
session_unset($_SESSION['admin']);
session_unset($_SESSION['user']);
header('location:login.php');
die();
?>
