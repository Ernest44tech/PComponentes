# Dockerfile
FROM php:8.2-cli

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y git unzip zip libzip-dev libpq-dev && docker-php-ext-install zip pdo pdo_pgsql

# Copia todo el proyecto
COPY . /app
WORKDIR /app

# Da permisos de ejecución a start.sh
RUN chmod +x start.sh

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala dependencias
RUN composer install

# Expone el puerto correcto
EXPOSE 3000

# Comando de arranque
CMD ["./start.sh"]
