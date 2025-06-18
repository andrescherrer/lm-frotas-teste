#!/bin/sh

chmod -R 777 storage bootstrap/cache

php artisan migrate

exec php-fpm