#!/bin/sh
set -e

composer install --no-interaction --optimize-autoloader --no-dev
npm install
npm run build

php artisan migrate
php artisan config:clear
php artisan route:clear
php artisan view:clear

exec supervisord -c docker/app/supervisord.conf
