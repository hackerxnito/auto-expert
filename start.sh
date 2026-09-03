#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 10000;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Clear caches so Laravel reads environment variables dynamically on boot
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Start Nginx and PHP-FPM
nginx
php-fpm