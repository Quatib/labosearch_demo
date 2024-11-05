# Use the official PHP 7.4 image as a base
FROM php:7.4-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the application files into the container
COPY . .

# Set permissions for the CodeIgniter directory
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]