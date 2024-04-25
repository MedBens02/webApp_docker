FROM php:apache

# Install Git
RUN apt-get update && \
    apt-get install -y git

# Install mysqli extension
RUN docker-php-ext-install mysqli
