# Use the official PHP 8.2 image with FPM (FastCGI Process Manager)
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    default-mysql-client \  
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the contents of the current directory into the container
COPY . /var/www/html

# Expose port 9000 to interact with the container from outside
EXPOSE 8000

# Start PHP-FPM server
CMD ["php-fpm"]
