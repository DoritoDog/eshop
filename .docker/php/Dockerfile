FROM php:7.4-apache

# PHP extensions
RUN apt update
RUN apt install libicu-dev zip unzip libzip-dev -y
RUN docker-php-ext-install -j$(nproc) intl pdo pdo_mysql zip

# Composer
RUN apt install git -y
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:2.5.5 /usr/bin/composer /usr/local/bin/composer
COPY . .
RUN composer install

# Apache
RUN chown -R www-data .
RUN a2enmod rewrite
