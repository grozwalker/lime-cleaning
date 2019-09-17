FROM php:7-fpm

RUN apt-get -qq update && apt-get -qq install -y \
    libmcrypt-dev \
    libpq-dev \
    git \
    vim \
    zip \
    openssl \
    zlib1g-dev \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev  \
 && rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y wget git unzip \
    && pecl install xdebug-2.7.1 \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring \
    tokenizer \
    bcmath

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer
WORKDIR /var/www/app
