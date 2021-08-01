FROM php:7.4-fpm

USER root

WORKDIR /var/www

# Install dependencies
RUN php -i
RUN apt-get update \
    # gd
    && apt-get install -y --no-install-recommends build-essential libfreetype6-dev libjpeg-dev libpng-dev libwebp-dev zlib1g-dev libzip-dev unzip curl git jpegoptim optipng pngquant gifsicle locales libonig-dev  \
    && docker-php-ext-configure gd  \
    && docker-php-ext-install gd \
    # pdo_mysql
    && docker-php-ext-install pdo_mysql mbstring \
    # pdo
    && docker-php-ext-install pdo \
    # zip
    && docker-php-ext-install zip \
    && apt-get autoclean -y

RUN pecl install igbinary && pecl bundle redis && cd redis && phpize && ./configure --enable-redis-igbinary && make && make install \
    && docker-php-ext-enable igbinary redis


# Copy files
COPY . /var/www

#todo: should be chown
RUN chmod +rwx /var/www

RUN chmod -R 775 /var/www

# setup npm
#RUN npm install -g npm@latest

#RUN npm install

#RUN npm rebuild node-sass

#RUN npm run prod

# setup composer and laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --working-dir="/var/www"

RUN composer dump-autoload --working-dir="/var/www"

RUN php artisan config:clear

RUN php artisan config:cache

RUN ["chmod", "+x", "post_deploy.sh"]

CMD [ "sh", "./post_deploy.sh" ]
# CMD php artisan serve --host=127.0.0.1 --port=9000


