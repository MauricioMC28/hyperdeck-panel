FROM php:7.4.29-apache-buster
RUN apt-get update && apt-get install -y sendmail libpng-dev libzip-dev zlib1g-dev libonig-dev && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install mysqli pdo pdo_mysql mbstring zip gd gettext exif
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY ./panel /var/www/html
RUN chown -R www-data:www-data /var/www/html
