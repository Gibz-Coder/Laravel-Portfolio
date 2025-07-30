@echo off
echo Starting Laravel production optimization...

REM Clear all caches first
echo Clearing existing caches...
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

REM Optimize autoloader
echo Optimizing Composer autoloader...
composer install --optimize-autoloader --no-dev

REM Cache configuration
echo Caching configuration...
php artisan config:cache

REM Cache routes
echo Caching routes...
php artisan route:cache

REM Cache views
echo Caching views...
php artisan view:cache

REM Cache events
echo Caching events...
php artisan event:cache

REM Optimize for production
echo Running additional optimizations...
php artisan optimize

echo Production optimization completed!
echo.
echo Remember to:
echo 1. Set APP_ENV=production in your .env file
echo 2. Set APP_DEBUG=false in your .env file
echo 3. Generate a new APP_KEY if needed: php artisan key:generate
echo 4. Run migrations: php artisan migrate --force
echo 5. Build frontend assets: npm run build

pause
