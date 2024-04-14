# Use an existing Apache PHP image
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Copy your project files to the container
COPY . .

# Set the default page to login.php
RUN sed -i 's/DirectoryIndex index.php/DirectoryIndex login.php index.php/g' /etc/apache2/mods-enabled/dir.conf


RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli





