# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Copiar todos los archivos al contenedor
COPY . /var/www/html/

# Configurar el directorio de trabajo
WORKDIR /var/www/html/

# Exponer el puerto 80 (servidor web)
EXPOSE 80
