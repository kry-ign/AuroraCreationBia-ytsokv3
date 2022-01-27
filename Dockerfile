FROM php:7.3-apache
RUN apt update && apt upgrade -y
RUN docker-php-ext-install your-desired-php-extensions
EXPOSE 80