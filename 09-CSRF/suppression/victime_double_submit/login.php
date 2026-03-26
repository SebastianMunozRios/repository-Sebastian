<?php
session_start();
$_SESSION['user'] = 'parrain@example.com';
$token = bin2hex(random_bytes(32));
setcookie("csrf_token", $token);
header('Location: index.php');
?>
