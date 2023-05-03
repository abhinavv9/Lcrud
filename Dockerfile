# Use an official PHP runtime as a parent image
FROM php:7.4-apache



# Install any needed packages
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip \
    && a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer --ansi --version --no-interaction

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY ./composer.json ./composer.lock* ./
RUN rm -rf /var/www/html/vendor
RUN composer install --no-scripts --no-autoloader --ansi --no-interaction
RUN ls -la
# Copy .env.example to .env
COPY .env.example .env

COPY . .


# Set permissions for storage and bootstrap/cache folders
RUN chown -R www-data:www-data storage bootstrap/cache
# Generate application key
RUN php artisan serve

# Expose port 80 for Apache
EXPOSE 80
