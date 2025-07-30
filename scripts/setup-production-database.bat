@echo off
echo Setting up production database...

REM Check if .env file exists
if not exist .env (
    echo Error: .env file not found. Please create one from .env.example
    pause
    exit /b 1
)

REM Run migrations
echo Running database migrations...
php artisan migrate --force

REM Ask if user wants to seed the database
set /p seed="Do you want to seed the database with sample data? (y/N): "
if /i "%seed%"=="y" (
    echo Seeding database...
    php artisan db:seed --force
) else (
    echo Skipping database seeding.
)

REM Create storage link
echo Creating storage link...
php artisan storage:link

echo Database setup completed!
echo.
echo Next steps:
echo 1. Update your .env file with production database credentials
echo 2. Make sure your web server has proper permissions
echo 3. Configure your web server to point to the public directory

pause
