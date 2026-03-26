<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Non connecté !");
}
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Échec de vérification CSRF");
}
file_put_contents("suppr.log", "Suppression (CSRF OK) compte de " . $_SESSION['user'] . "\n", FILE_APPEND);
echo "Compte supprimé en toute sécurité.";
?>
