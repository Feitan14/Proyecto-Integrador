# Usa PHP con FPM y extensiones necesarias
FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql bcmath

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala Node.js y npm para Vite
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia los archivos del proyecto
COPY . .

# Instala dependencias de Laravel y Node.js
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Da permisos a las carpetas necesarias
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expone el puerto 9000 (PHP-FPM)
EXPOSE 9000

CMD ["php-fpm"]
