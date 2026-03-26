<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo '<a href="login.php">Se connecter</a>';
    exit;
}
if (!isset($_COOKIE['csrf_token'])) {
    $token = bin2hex(random_bytes(32));
    setcookie("csrf_token", $token);
} else {
    $token = $_COOKIE['csrf_token'];
}
?>
<h2>Bienvenue <?php echo $_SESSION['user']; ?></h2>
<form method="POST" action="supprcmpt.php">
    <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
    <input type="submit" value="Supprimer mon compte">
</form>
