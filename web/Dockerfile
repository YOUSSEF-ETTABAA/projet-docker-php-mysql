FROM php:7.4-apache

# Installer l'extension mysqli pour la connexion MySQL
RUN docker-php-ext-install mysqli

# Activer le module de réécriture Apache
RUN a2enmod rewrite

# Port exposé par Apache
EXPOSE 80

# Démarrer Apache en premier plan
CMD ["apache2-foreground"]
