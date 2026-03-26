<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Non connecté !");
}
file_put_contents("suppr.log", "Suppression compte de " . $_SESSION['user'] . "\n", FILE_APPEND);
echo "Compte supprimé.";
?>
