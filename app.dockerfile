FROM php:7.4-fpm-alpine

ARG UID

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions end
RUN apk --update add shadow
RUN apk --update add sudo
RUN docker-php-ext-install pdo_mysql
RUN apk --update add npm

RUN addgroup -g ${UID} test-app-user && adduser -G test-app-user -g test-app-user -s /bin/sh -D test-app-user

USER test-app-user