#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 10000;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Generate a .env file dynamically so PHP-FPM / Laravel can see the variables
echo "APP_ENV=${APP_ENV:-production}" > .env
echo "APP_DEBUG=${APP_DEBUG:-true}" >> .env
echo "APP_KEY=${APP_KEY}" >> .env
echo "APP_URL=${APP_URL}" >> .env

# Clear any lingering cache
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Start Nginx and PHP-FPM
nginx
php-fpm