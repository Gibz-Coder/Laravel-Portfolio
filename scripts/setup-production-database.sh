#!/bin/bash

# Laravel Production Database Setup Script
echo "Setting up production database..."

# Check if .env file exists
if [ ! -f .env ]; then
    echo "Error: .env file not found. Please create one from .env.example"
    exit 1
fi

# Run migrations
echo "Running database migrations..."
php artisan migrate --force

# Ask if user wants to seed the database
read -p "Do you want to seed the database with sample data? (y/N): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo "Seeding database..."
    php artisan db:seed --force
else
    echo "Skipping database seeding."
fi

# Create storage link
echo "Creating storage link..."
php artisan storage:link

# Set proper permissions (adjust paths as needed for your server)
echo "Setting storage permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Database setup completed!"
echo ""
echo "Next steps:"
echo "1. Update your .env file with production database credentials"
echo "2. Make sure your web server has proper permissions"
echo "3. Configure your web server to point to the public directory"
