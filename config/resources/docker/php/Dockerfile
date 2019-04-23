FROM php:7.2-fpm-stretch

MAINTAINER RUSLAN ROZHKOV <ruslan399@gmail.com>

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        jpegoptim \
        optipng \
        pngquant \
        gifsicle \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

WORKDIR /var/www/html

USER www-data

CMD ["php-fpm"]

