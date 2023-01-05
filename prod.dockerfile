FROM php:7.4-fpm-alpine

ARG UID

WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions end
RUN apk --update add shadow
RUN apk add --update npm
RUN apk --update add sudo
RUN docker-php-ext-install pdo_mysql

COPY ./ /app
COPY prod.env .env
RUN composer install
RUN npm install
RUN npm run prod

