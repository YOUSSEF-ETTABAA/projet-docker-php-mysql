# Application Web PHP + MySQL avec Docker Compose

## Description
Application d'enregistrement d'utilisateurs en PHP connectée à une
base de données MySQL, orchestrée avec Docker Compose.

## Services
| Service     | URL                      | Description     |
|-------------|--------------------------|-----------------|
| web         | http://localhost:8080    | App PHP/Apache  |
| phpMyAdmin  | http://localhost:8081    | Interface BDD   |
| mysql       | localhost:3306           | Base de données |

## Lancement rapide
```bash
git clone https://github.com/USER/PROJET-DOCKER.git
cd PROJET-DOCKER
mkdir -p MySQL/data
docker-compose up -d
```

## Arrêt
```bash
docker-compose down
```

## Technologies
- PHP 7.4 + Apache (Docker)
- MySQL 5.7 (Docker)
- phpMyAdmin (Docker)
- Docker Compose 3.8
