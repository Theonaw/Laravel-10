# Projet de restaurant O Cnamo

Ce projet est un site web test pour la formation Devweb du CNAM.

## Prérequis

-Apache 2.4.54
-MariaDB 10.10.2
-PHP 8.0.26
-Composer 2.6.5
-NodeJS et npm @TODO

## Installation

@TODO

### Version dev
Il faut d'abord cloner l'application en local:
```
git clonehttps//github.com/jibundeyare/cnam-nfa021-2023-2024-laravel-10
```

Ensuite, il faut créer une BDD puis configurer les accès à la BDD dans le fichier `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mon_application
DB_USERNAME=mon_application
DB_PASSWORD=123
```
Pour créer la BDD, vous pouvez utilisez un script bash:
```
./mkdb.sh
```

Vous pouvez donner un nom à l'application dans le fichier `.env`:
```
APP_NAME="Mon Application"
```

## Utilisation

Dans le terminal:
```
php artisan serve
```
Aller sur la page [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Requêtes SQL utiles
```
-- Liste des catégories et de leurs plats
SELECT plats.id, plats.nom, categories.id, categories.nom
FROM categories
INNER JOIN plats ON categories.id = plats.categories_id;
```

```
-- Liste des plats et de leurs étiquettes
SELECT plats.id, plats.nom, etiquettes.id, etiquettes.nom
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom,etiquettes.nom;
```

## Recommendations

### Tailles des images d'ambiance

La taille recommandée est :

-Largeur : 1024px
-Hauteur : 768px

Il vaut mieux utiliser des fichiers JPEG car ils sont plus légers.

## Mentions légales

### Licence du projet

@TODO

### Droits d'auteur

Toute les photos du site on été réalisée par ...
