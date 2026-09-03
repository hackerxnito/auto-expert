#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 10000;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Generate the .env file with your key hardcoded directly
echo "APP_ENV=production" > .env
echo "APP_DEBUG=true" >> .env
echo "APP_KEY=base64:Fm/mIxrhYCYJGRGemHevOJb7THiogErhIx+PGH8fCZY=" >> .env
echo "APP_URL=https://auto-expert-ja1r.onrender.com" >> .env

# Clear any lingering cache
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Start Nginx and PHP-FPM
nginx
php-fpm