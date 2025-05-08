#!/bin/sh

cd /app

chmod -R 775 storage bootstrap/cache

php artisan serve --host=0.0.0.0 --port=${PORT:-3000}
# Esto es un cambio forzado para hacer commit
