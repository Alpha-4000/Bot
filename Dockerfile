FROM php:8.2-apache

WORKDIR /var/www/html

COPY Obmen.php /var/www/html/Obmen.php

EXPOSE 80
