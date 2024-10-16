# Gestion des Produits et Catégories - Laravel

Ce projet est une application Laravel simple qui permet de gérer des produits et des catégories. Il inclut des fonctionnalités CRUD (Créer, Lire, Mettre à jour et Supprimer) pour les produits et les catégories, ainsi qu'un tableau de bord qui affiche des statistiques sur les produits et les revenus.

## Fonctionnalités

- **Gestion des catégories :**
  - Créer, lire, mettre à jour et supprimer des catégories.
  - Valider les champs du formulaire lors de la création et de la mise à jour.
  
- **Gestion des produits :**
  - Créer, lire, mettre à jour et supprimer des produits.
  - Lier les produits à des catégories existantes.
  
- **Tableau de bord :**
  - Affiche le nombre de catégories et de produits.
  - Calcul du revenu total basé sur les prix des produits.
  - Affiche les 5 produits les plus récents.

## Installation

### Prérequis

- PHP >= 8.0
- Composer
- MySQL (ou tout autre base de données compatible avec Laravel)
- Laravel 9.x

### Étapes d'installation

1. Clonez ce dépôt :
    git clone https://github.com/celine-fernandes/groceries-list-laravel.git
    ```

2. Installez les dépendances avec Composer :
    composer install
    ```

3. Créez un fichier `.env` en copiant le fichier `.env.example` :
    cp .env.example .env
    ```


5. Configurez votre base de données dans le fichier `.env` :
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_votre_base_de_donnees
    DB_USERNAME=utilisateur
    DB_PASSWORD=mot_de_passe
    ```

6. Exécutez les migrations pour créer les tables de la base de données :
    php artisan migrate



8. Démarrez le serveur local :
    php artisan serve


9. Ouvrez le navigateur et accédez à `http://localhost:8000`.

