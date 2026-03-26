<?php
session_start();
if (!isset($_SESSION['auth'])) {
    echo '<a href="login.php">Se connecter</a>';
    exit;
}
$nom = $_SESSION['nom'] ?? 'Jean';
$email = $_SESSION['email'] ?? 'parrain@example.com';
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<h2>Bonjour <?php echo htmlspecialchars($nom); ?> (<?php echo htmlspecialchars($email); ?>)</h2>
<form method="POST" action="profil.php">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <label>Nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>"></label><br>
    <label>Email : <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></label><br>
    <input type="submit" value="Mettre à jour mon profil">
</form>
