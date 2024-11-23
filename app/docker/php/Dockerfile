FROM php:8.4-fpm-alpine
WORKDIR /webapp
COPY ./src/ public/
COPY .env .
CMD ["php-fpm"]
