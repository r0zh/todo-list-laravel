FROM php:8.2-apache-buster

EXPOSE 80

# Install git, zip and unzip required for composer
RUN apt update && apt install -y \
    zip \
    unzip \
    git \
    curl \
    software-properties-common

# Setup mysql and oracle extensions for php
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo_mysql
RUN a2enmod rewrite
RUN apachectl restart

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
