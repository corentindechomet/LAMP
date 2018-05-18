# LAMP docker 

LAMP docker est un projet basé sur Linux + Apache + MySQL + PhpMyAdmin. Le but de se projet est d'encapsuler facilement tout application web. Il est composé de 3 images docker:
* PHP 5.6 (lavoweb/php-5.6)
* MySQL 5.5
* PhpMyAdmin (phpmyadmin/phpmyadmin)

## Installation

### Requirements
* Docker - https://docs.docker.com/install/
* Docker Compose - https://docs.docker.com/compose/install/

## Usage
Une fois les préréquis installés, il vous suffit d'exécuter la commande suivante : 
`$ docker-compose up`

Afin de voir que tout fonctionne bien, il est nécessaire de vérifier que les 3 images sont bien installées :
`$ docker images`

Mais aussi que les 3 containers contenant chacun une image sont bien lancés : 
`$ docker ps`

Il devient alors possible de mettre votre application web dans le dossier ./www.

## Configuration

## License
[MIT](https://choosealicense.com/licenses/mit/)
