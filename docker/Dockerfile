FROM php:8.1-apache

RUN apt-get update -y
RUN apt-get install git -y
RUN apt-get install zip -y
RUN apt-get install libfontconfig1 libxrender1 -y

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer