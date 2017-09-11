FROM php:7-fpm

RUN apt-get -qq update && \
    apt-get -qq install -y libmcrypt-dev mysql-client git vim zip zlib1g-dev && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mcrypt pdo pdo_mysql  zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer
WORKDIR /var/www/app
