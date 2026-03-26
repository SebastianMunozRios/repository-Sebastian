<?php
session_start();
$_SESSION['auth'] = true;
$_SESSION['nom'] = 'Jean';
$_SESSION['email'] = 'parrain@example.com';
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
header('Location: index.php');
?>
