FROM node:14-alpine as builder

ENV NODE_ENV=production
WORKDIR /app

ADD ./project/package.json ./project/yarn.lock ./project/webpack.config.js ./
ADD project/assets ./assets

RUN mkdir -p public && \
    NODE_ENV=development yarn install && \
    yarn run build

# 
FROM php:7.4-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev;
    
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
    mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install opcache intl zip calendar dom mbstring xsl

WORKDIR /etc/apache2/sites-enabled
RUN rm 000-default.conf
COPY ./vhosts/vhost.conf ./vhost.conf

WORKDIR /var/www/
COPY ./project ./project

COPY --from=builder /app/public/build ./project/public/build
RUN chmod 0777 -R project/var/log project/var/cache
