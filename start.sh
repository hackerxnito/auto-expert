#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 80;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Cache Laravel configurations for production performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Nginx and PHP-FPM
nginx
php-fpm