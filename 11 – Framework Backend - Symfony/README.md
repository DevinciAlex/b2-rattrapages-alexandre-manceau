# 11 – Framework Backend - Symfony

## Sujet
Création d’un dashboard pour gérer les restaurants et leurs employés via Symfony.

## Fonctionnalités réalisées
- Projet Symfony
- Entités Restaurant (name, location, timestamps)
- Entités Employee (name, email, actif, restaurant_id, timestamps)
- Relations entre entités
- Fixtures pour peupler la BDD
- CRUD complet pour Restaurant et Employee

## Setup
1. `composer install`
2. Configurer `.env` avec tes accès BDD
3. `php bin/console doctrine:migrations:migrate`
4. `php bin/console doctrine:fixtures:load`
5. `symfony server:start` ou `php -S localhost:8000 -t public`

## Lien de la vidéo explicative
https://youtu.be/GQYIb2iTDiU
