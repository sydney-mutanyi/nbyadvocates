#!/bin/sh
set -e
cd /var/www/html

# Wait for the database (compose healthcheck covers this too, but be safe)
if [ "$DB_CONNECTION" = "mysql" ]; then
  echo "Waiting for database at $DB_HOST:$DB_PORT..."
  until php -r 'try { new PDO("mysql:host=".getenv("DB_HOST").";port=".getenv("DB_PORT"), getenv("DB_USERNAME"), getenv("DB_PASSWORD")); } catch (Exception $e) { exit(1); }'; do
    sleep 2
  done
fi

php artisan storage:link --force || true
php artisan migrate --force

# Cache config/routes/views only in production
if [ "$APP_ENV" = "production" ]; then
  php artisan optimize
else
  php artisan optimize:clear
fi

chown -R www-data:www-data storage bootstrap/cache
exec "$@"
