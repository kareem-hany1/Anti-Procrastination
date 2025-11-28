# Anti-Procrastination

> Fed up of procrastinating — une petite appli perso qui t’envoie un email pour te rappeler de faire tes tâches.

## 🚀 Qu’est-ce que c’est ?

Anti-Procrastination est une application web back-end + front-end qui permet de définir des tâches (to-do), et de recevoir des rappels par email lorsqu’il est l’heure de les faire.  
Idéal pour les procrastinateurs (comme certains d’entre nous 😄), ou simplement pour garder le cap sur ses objectifs.

## ✨ Fonctionnalités principales

- Création, modification, suppression de tâches.  
- Envoi d’emails de rappel — pour ne plus oublier ce qu’il y a à faire.  
- Interface web (frontend + backend) — simple et facile à déployer.  
- Code structuré: backend en PHP (probablement avec un framework), frontend / assets, configuration, tests, etc.  
- Configuration via fichier `.env`, gestion des dépendances, etc.  

## 📦 Prérequis

- PHP (version compatible avec ton setup)  
- Serveur web / configuration mail (SMTP ou équivalent) pour l’envoi d’emails  
- Base de données (selon la configuration du projet)  
- [Composer](https://getcomposer.org/) (si tu utilises des dépendances PHP)  
- (Optionnel) Node / npm / yarn — si le projet utilise des assets frontend compilés  

## 🛠️ Installation & mise en place (locale)

1. Clone le dépôt :`git clone https://github.com/branGitfox/Anti-Procrastination.git`  
2. Copie le fichier d’exemple d’environnement :  
   ```bash
   cp .env.example .env

   composer install
    npm install
    npm run build
   php artisan migrate
    php artisan serve
