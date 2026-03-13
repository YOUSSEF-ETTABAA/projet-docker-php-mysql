<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'enregistrement</title>
  <style>
    body { font-family: Arial; max-width: 600px; margin: 40px auto; }
    input { padding: 8px; margin: 5px; width: 200px; }
    button { padding: 8px 20px; background:#1F5C99; color:#fff; border:none; }
  </style>
</head>
<body>
  <h1>Formulaire d'enregistrement</h1>
  <form action="save.php" method="post">
    <label>Nom :</label>
    <input type="text" name="nom" required><br><br>
    <label>Email :</label>
    <input type="email" name="email" required><br><br>
    <button type="submit">Enregistrer</button>
    <a href="list.php">Voir la liste</a>
  </form>
</body>
</html>
