# Usa una imagen de PHP con Apache
FROM php:7.4-apache

# Instala las dependencias necesarias para MySQL y otras extensiones
RUN docker-php-ext-install mysqli

# Copia los archivos PHP al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
