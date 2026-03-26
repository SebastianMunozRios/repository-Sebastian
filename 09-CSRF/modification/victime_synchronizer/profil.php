<?php
session_start();
if (!isset($_SESSION['auth'])) {
    die("Non connecté !");
}
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Échec de vérification CSRF");
}
$_SESSION['nom'] = $_POST['nom'] ?? $_SESSION['nom'];
$_SESSION['email'] = $_POST['email'] ?? $_SESSION['email'];
file_put_contents("profil.log", "SYNC: nom={$_SESSION['nom']}, email={$_SESSION['email']}\n", FILE_APPEND);
echo "Profil mis à jour (Synchronizer).";
?>
