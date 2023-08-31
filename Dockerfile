# Use an official PHP image as the base image
FROM php:7.3-fpm

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Copy the Laravel app files into the container
COPY . .


# Install Composer (a PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Install app dependencies
RUN composer install

# Expose port 9000 for PHP-FPM
EXPOSE 8000


# Command to run the PHP-FPM server
CMD ["php-fpm"]

RUN composer install


CMD php artisan serve
# Use an official PHP image as the base image
FROM php:7.3-fpm

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Copy the Laravel app files into the container
COPY . .

# Install Composer (a PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install app dependencies
RUN composer install

# Expose port 8000 for Laravel's built-in server
EXPOSE 8000

# Command to run the Laravel application using the built-in server
CMD php artisan serve --host=0.0.0.0 --port=8000
