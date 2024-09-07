FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer