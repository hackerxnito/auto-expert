#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 10000;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Cache Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start services
nginx
php-fpm