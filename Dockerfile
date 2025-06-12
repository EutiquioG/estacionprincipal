FROM php:8.2-apache

# Instala la extensión mysqli (y dependencias si se requieren)
RUN docker-php-ext-install mysqli

# Habilita mod_rewrite (opcional pero útil si usas .htaccess)
RUN a2enmod rewrite

# Copia el contenido del proyecto a /var/www/html
COPY public/ /var/www/html/

# Da permisos apropiados (opcional pero recomendable)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

