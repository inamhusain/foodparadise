<?php 
session_start();
$_SESSION['guest']='true';
header('location:home.php');
?>