<?php
session_start();
$nom = $_SESSION['nom'] ?? 'Jean';
$email = $_SESSION['email'] ?? 'parrain@example.com';
echo "<h2>Bonjour $nom ($email)</h2>";
if (!isset($_SESSION['auth'])) {
    echo '<a href="login.php">Se connecter</a>';
    exit;
}
?>
<form method="POST" action="profil.php">
    <label>Nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>"></label><br>
    <label>Email : <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></label><br>
    <input type="submit" value="Mettre à jour mon profil">
</form>
