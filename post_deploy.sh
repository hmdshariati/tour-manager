
#!/bin/sh

# update application cache
php artisan optimize
php artisan migrate --seed
# start the application

php-fpm -R -F #&&  nginx -g "daemon off;"
