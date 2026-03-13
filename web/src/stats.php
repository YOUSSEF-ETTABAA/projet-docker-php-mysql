<?php
$mysqli = new mysqli("mysql", "user", "userpassword", "testdb");
$result = $mysqli->query("SELECT COUNT(*) as total FROM users");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html><html lang='fr'><body>
<h1>Statistiques</h1>
<p>Nombre total d'utilisateurs : <strong>
  <?= $row['total'] ?></strong></p>
<a href="index.php">Retour</a>
</body></html>
