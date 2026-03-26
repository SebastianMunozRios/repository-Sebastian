<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Non connecté !");
}
if (!isset($_POST['csrf_token']) || !isset($_COOKIE['csrf_token']) || $_POST['csrf_token'] !== $_COOKIE['csrf_token']) {
    die("Échec vérification CSRF (double submit)");
}
file_put_contents("suppr.log", "Suppression (Double Submit OK) de " . $_SESSION['user'] . "\n", FILE_APPEND);
echo "Compte supprimé en toute sécurité.";
?>
