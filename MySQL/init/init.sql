-- Supprime et recrée la base de données
DROP DATABASE IF EXISTS testdb;
CREATE DATABASE testdb;
USE testdb;
-- Crée la table des utilisateurs
CREATE TABLE users (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  nom   VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Données de test optionnelles
INSERT INTO users (nom, email) VALUES
  ('Alice Dupont', 'alice@example.com'),
  ('Bob Martin', 'bob@example.com');
