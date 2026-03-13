<?php

$mysqli = new mysqli("mysql", "user", "userpassword", "testdb");

if ($mysqli->connect_error) {
  die("Erreur de connexion : " . $mysqli->connect_error);
}

$nom   = $mysqli->real_escape_string($_POST['nom']);
$email = $mysqli->real_escape_string($_POST['email']);
$sql = "INSERT INTO users (nom, email) VALUES ('$nom', '$email')";

if ($mysqli->query($sql) === TRUE) {
  header("Location: list.php");
} else {
  echo "Erreur : " . $mysqli->error;
}
$mysqli->close();
?>
