<?php
session_start();
$_SESSION['user'] = 'parrain@example.com';
header('Location: index.php');
?>
