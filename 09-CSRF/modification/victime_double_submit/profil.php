<?php
session_start();
if (!isset($_SESSION['auth'])) {
    die("Non connecté !");
}
if (!isset($_POST['csrf_token']) || !isset($_COOKIE['csrf_token']) || $_POST['csrf_token'] !== $_COOKIE['csrf_token']) {
    die("Échec vérification CSRF (double submit)");
}
$_SESSION['nom'] = $_POST['nom'] ?? $_SESSION['nom'];
$_SESSION['email'] = $_POST['email'] ?? $_SESSION['email'];
file_put_contents("profil.log", "DOUBLE: nom={$_SESSION['nom']}, email={$_SESSION['email']}\n", FILE_APPEND);
echo "Profil mis à jour (Double Submit).";
?>
