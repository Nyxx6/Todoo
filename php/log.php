<?php
session_start();
if(!isset($_SESSION) || !isset($_SESSION['uname'])) {header('location:login.php?err');exit();}
?>