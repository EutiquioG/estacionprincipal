FROM php:8.1-apache

# Copia el código a la carpeta del servidor
COPY . /var/www/html/

# Habilita el módulo de Apache para reescrituras (si lo necesitas)
RUN a2enmod rewrite