<?php session_start(); ?>
<h2>Bienvenue <?php echo $_SESSION['user'] ?? 'invité'; ?></h2>
<?php if (isset($_SESSION['user'])): ?>
<form method="POST" action="supprcmpt.php">
    <input type="submit" value="Supprimer mon compte">
</form>
<?php else: ?>
<a href="login.php">Se connecter</a>
<?php endif; ?>
