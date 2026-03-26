<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Non connecté !");
}
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
file_put_contents("profil.txt", "Nom: $nom\nEmail: $email\n");
file_put_contents("modifs.log", date("c") . " - MAJ profil via formulaire\n", FILE_APPEND);
echo "Profil mis à jour.";
?>
