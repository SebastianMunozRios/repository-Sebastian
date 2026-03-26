<?php
session_start();
$_SESSION['auth'] = true;
$_SESSION['nom'] = 'Jean';
$_SESSION['email'] = 'parrain@example.com';
header('Location: index.php');
?>
