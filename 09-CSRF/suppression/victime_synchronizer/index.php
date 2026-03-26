<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo '<a href="login.php">Se connecter</a>';
    exit;
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<h2>Bienvenue <?php echo $_SESSION['user']; ?></h2>
<form method="POST" action="supprcmpt.php">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <input type="submit" value="Supprimer mon compte">
</form>
