FROM php:8.1-apache

RUN apt-get update

RUN /usr/sbin/a2enmod rewrite

COPY default.conf /etc/apache2/sites-available/000-default.conf

RUN chmod -R 777  /var/www/html
