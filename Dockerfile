# syntax=docker/dockerfile:1

FROM php:7.4.1-apache

# Copy app files from the app directory.
COPY ./PfHD_v4-0 /var/www/html

RUN apt-get update && apt-get install -y sendmail libpng-dev libzip-dev zlib1g-dev libonig-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install mysqli pdo pdo_mysql mbstring zip gd gettext exif \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && chown -R www-data:www-data /var/www

USER www-data
