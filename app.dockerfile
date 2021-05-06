FROM php:7.4-fpm 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && apt-get install -y --no-install-recommends libpq-dev \
    libzip-dev \
    zip \
    libjpeg62-turbo-dev \
    libpng-dev\
    libjpeg-dev\
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip gd\
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*