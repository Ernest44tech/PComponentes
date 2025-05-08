#!/bin/sh

# Navega a la carpeta del proyecto
cd /app

# Da permisos si es necesario
chmod -R 775 storage bootstrap/cache

# Sirve Laravel en el puerto 8080 desde la carpeta public
php -S 0.0.0.0:8080 -t public
