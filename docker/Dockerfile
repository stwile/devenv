FROM php:8.3-apache

RUN apt-get update \
  && apt-get install -y \
    vim less git zip unzip mariadb-client \
    g++ libonig-dev libicu-dev \
  && docker-php-ext-install -j$(nproc) mbstring pdo pdo_mysql intl \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && ln -sf /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

ENV COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer:2.7.9 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
