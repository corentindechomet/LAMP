# LAMP Docker 

LAMP Docker est un projet basé sur Linux + Apache + MySQL + PhpMyAdmin. Le but de se projet est d'encapsuler facilement tout application web. Il est composé de 3 images Docker:
* PHP 5.6 (lavoweb/php-5.6)
* MySQL 5.5
* PhpMyAdmin (phpmyadmin/phpmyadmin)

## Installation

### Préréquis
* Docker - https://docs.docker.com/install/
* Docker Compose - https://docs.docker.com/compose/install/

## Usage
### En ligne de commande
Une fois les préréquis installés, il vous suffit d'exécuter la commande suivante : 
`$ docker-compose up`
. Si vous n'avez pas les images nécessaires, celles-ci vont être téléchargé sur votre machine.

Afin de vérifier que tout fonctionne bien, il est possible de vérifier que les 3 images sont bien installées :
`$ docker images`.

Mais aussi que les 3 containers Docker contenant chacun une image sont bien lancés : 
`$ docker ps`.

### Créer une base de données
Rendez-vous sur http://localhost:8080/ pour accéder à phpMyAdmin et ainsi gérer vos bases de données.

### Lancer votre application web
Vous pouvez mettre votre application web dans le dossier "./www", et y accéder aisément depuis http://localhost/.

## Configuration
### PHP
PHP est configurable, via le fichier présent dans le dossier config "custom.php.ini", et via les variables d'environnement dans le docker-compose.yml (voir https://hub.docker.com/r/phpmyadmin/phpmyadmin/).

### MySQL
MySQL est paramétrable via les variables d'environnement du docker-compose.yml (voir https://hub.docker.com/_/mysql/).

## Sécurité
:warning: L'aspect sécurité n'a pas été traité à travers ce projet.

## License
[MIT](https://choosealicense.com/licenses/mit/)
