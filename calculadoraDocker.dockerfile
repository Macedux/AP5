# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Copiar los archivos de tu aplicación al contenedor
COPY . /var/www/html/

# Asegurarnos de que los permisos sean correctos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80
