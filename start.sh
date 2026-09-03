#!/usr/bin/env bash

# Bind Nginx to Render's dynamic port
sed -i "s/listen 10000;/listen ${PORT:-10000};/g" /etc/nginx/sites-available/default

# Create the SQLite database file and folder structure
mkdir -p database
touch database/database.sqlite

# Generate the .env file dynamically
echo "APP_ENV=production" > .env
echo "APP_DEBUG=true" >> .env
echo "APP_KEY=base64:Fm/mIxrhYCYJGRGemHevOJb7THiogErhIx+PGH8fCZY=" >> .env
echo "APP_URL=https://auto-expert-ja1r.onrender.com" >> .env
echo "DB_CONNECTION=sqlite" >> .env
echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> .env

# Grant write permissions to the web server user
chown -R www-data:www-data database storage bootstrap/cache
chmod -R 775 database storage bootstrap/cache
chmod 664 database/database.sqlite

# Run migrations so tables like 'sessions' are created automatically
php artisan migrate --force

# Clear caches
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Start Nginx and PHP-FPM
nginx
php-fpm