FROM php:7.0.4-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql \
    && touch /usr/local/etc/php/conf.d/uploads.ini \
    && printf "upload_max_filesize = 20M;\npost_max_size = 20M;" >> /usr/local/etc/php/conf.d/uploads.ini

