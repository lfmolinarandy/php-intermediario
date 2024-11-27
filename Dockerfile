# Usa una imagen de Apache con PHP preinstalado
FROM php:7.4-apache

# Copia los archivos PHP (como insertar_datos.php) al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
