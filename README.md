# Utilisation du pattern

## Récupération & préparation du dossier

- Récupération du repo & mise en place du projet
  - Cloner le repo du pattern `git clone git@github.com:O-clock-Dungeons/WP-Pattern-Composer.git`
  - Première solution:
    - Renommer le dossier avec le nom du projet souhaité `mv WP-Pattern-Composer <nouveau_nom>`
    - Se rendre dans le dossier nouvellement créé `cd <nouveau_nom>`
    - Supprimer le dossier `.git` afin de ne pas écraser le repo du pattern d'origine. Cela permet également de ne pas garder l'historique des commits dans notre nouveau projet. `sudo rm -R .git`
  - Deuxième solution:
    - Créer un nouveau dossier pour notre projet `mkdir <nouveau_nom>`
    - Prendre tout ce qui se trouve dans le dossier cloné (excepté le `.git`) et le dupliquer dans le nouveau dossier du projet.
  - Initiliser git dans notre dossier du projet `git init`

## Mise en place

- Installation de nos dépendances via Composer `composer install`
- Création de la BDD
- Création du fichier `wp-config.php` à partir du fichier `wp-config-sample.php`
  - Renseigner les informations de connexion à la BDD
  - Renseigner les clé de salage [URL Pratique](https://api.wordpress.org/secret-key/1.1/salt/)
  - Renseigner les constantes: `WP_HOME`, `WP_SITEURL`, `WP_CONTENT_URL` en remplacant `[l_url_de_mon_site]` par notre url (ex: localhost/monprojet)

## Gestion des droits

- Changer les droits des fichiers/dossier de notre projet afin que Apache puisse réaliser des modifications (MAJ etc.).
```bash
sudo chown -R $USER:www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
sudo chmod 644 .htaccess
```

## Let's play :tada:

- Se rendre sur l'url locale de notre projet pour terminer l'installation de WordPress
- Penser à changer les permaliens
  - Admin BO > Réglages > Permalinks > Post Name
- Activer la bonne langue sur le BO
  - Admin BO > Réglages > Général > Langue du site
