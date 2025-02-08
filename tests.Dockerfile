ARG PHP_VERSION="8.3"

FROM php:${PHP_VERSION}
WORKDIR /app

RUN apt-get update && apt-get install -y git unzip

ADD src /app/src
ADD tests /app/tests
COPY composer.json /app/

ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN composer update
CMD ["./vendor/bin/phpunit", "./tests"]