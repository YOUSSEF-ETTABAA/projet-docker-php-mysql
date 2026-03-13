<?php
$mysqli = new mysqli("mysql", "user", "userpassword", "testdb");
if ($mysqli->connect_error) die('Erreur connexion');
$result = $mysqli->query("SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html><html lang="fr"><head>
<meta charset="UTF-8"><title>Liste utilisateurs</title>
<style>body{font-family:Arial;max-width:700px;margin:40px auto;}
table{width:100%;border-collapse:collapse;}
th,td{border:1px solid #ccc;padding:8px;}</style>
</head><body>
  <h1>Utilisateurs enregistrés</h1>
  <a href="index.php">← Nouveau</a>
  <table><tr><th>ID</th><th>Nom</th><th>Email</th><th>Date</th></tr>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['nom']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td><?= $row['created_at'] ?></td>
  </tr>
  <?php endwhile; ?>
  </table></body></html>
