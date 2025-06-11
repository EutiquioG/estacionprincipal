FROM php:8.2-apache

# Copia el contenido del proyecto a /var/www/html
COPY public/ /var/www/html/

# Habilita mod_rewrite (útil si usaras .htaccess)
RUN a2enmod rewrite

# Permisos apropiados (opcional)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
