<?php
session_start();
$_SESSION['user'] = 'parrain@example.com';
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
header('Location: index.php');
?>
