#!/bin/bash

echo WARNING: This will stop your docker container and delete it including all logs
echo and data from your database.
echo " "
read -p "Are you sure? [y/N]" -n 1 -r
echo    # (optional) move to a new line
if [[ $REPLY =~ ^[Yy]$ ]]
then
    # Kill and remove the container
    docker kill cs248lamp-php82 cs248lamp-phpmyadmin cs248lamp-mariadb106
    docker rm cs248lamp-php82 cs248lamp-phpmyadmin cs248lamp-mariadb106

    # Remove the images
    docker image rm cs248lamp-webserver phpmyadmin cs248lamp-database

    # Remove the volumes
    docker volume prune -f

    # Remove the build cache
    docker builder prune -f

    # Reset the database data
    rm -rf ./data/mysql

    # Reset the logs
    rm -rf ./logs/mysql
    rm -rf ./logs/apache2
    rm -rf ./logs/xdebug
fi