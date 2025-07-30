# 🚀 Coolify Deployment Guide for Laravel Portfolio

This guide provides step-by-step instructions for deploying your Laravel Portfolio application to a Coolify server using your GitHub repository.

## 📋 Prerequisites

Before starting the deployment, ensure you have:

-   ✅ Coolify server set up and running
-   ✅ GitHub repository access: `https://github.com/Gibz-Coder/Laravel-Portfolio`
-   ✅ Domain name (optional but recommended)
-   ✅ Database service available (MySQL/PostgreSQL)

## 🔧 Step 1: Prepare Your Coolify Environment

### 1.1 Access Coolify Dashboard

1. Open your Coolify dashboard in a web browser
2. Log in with your credentials
3. Navigate to the main dashboard

### 1.2 Create a New Project

1. Click on **"New Project"** or **"+"** button
2. Enter project details:
    - **Name**: `Laravel Portfolio`
    - **Description**: `Personal portfolio website built with Laravel`

## 🗄️ Step 2: Set Up Database Service

### 2.1 Create Database Service

1. In your project, click **"Add Service"**
2. Select **"Database"**
3. Choose your preferred database:
    - **MySQL 8.0** (recommended)
    - **PostgreSQL 15** (alternative)

### 2.2 Configure Database

For MySQL:

```yaml
Service Name: laravel-portfolio-db
Database Name: laravel_portfolio
Username: laravel_user
Password: [Generate strong password]
Port: 3306
```

For PostgreSQL:

```yaml
Service Name: laravel-portfolio-db
Database Name: laravel_portfolio
Username: laravel_user
Password: [Generate strong password]
Port: 5432
```

### 2.3 Deploy Database

1. Click **"Deploy"** to create the database service
2. Wait for the database to be ready (green status)
3. Note down the connection details for later use

## 🌐 Step 3: Deploy Laravel Application

### 3.1 Create Application Service

1. Click **"Add Service"** in your project
2. Select **"Application"**
3. Choose **"Public Repository"**

### 3.2 Configure Repository

```yaml
Repository URL: https://github.com/Gibz-Coder/Laravel-Portfolio
Branch: main
Build Pack: Docker (or Nixpacks)
```

### 3.3 Application Configuration

```yaml
Name: laravel-portfolio-app
Port: 8000
Dockerfile: (leave empty for auto-detection)
Build Command: (leave empty for auto-detection)
Start Command: (leave empty for auto-detection)
```

## ⚙️ Step 4: Environment Variables Configuration

### 4.1 Add Environment Variables

In the application settings, add the following environment variables:

#### Basic Application Settings

```env
APP_NAME="Laravel Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_KEY=base64:acbx+t6e+A5rgJ+3GAY6EDX1NEd3xh8ZEZFox+M7SCQ=

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

BCRYPT_ROUNDS=12
```

#### Database Configuration

Replace with your actual database connection details:

```env
DB_CONNECTION=mysql
DB_HOST=laravel-portfolio-db
DB_PORT=3306
DB_DATABASE=laravel_portfolio
DB_USERNAME=laravel_user
DB_PASSWORD=your_database_password
```

#### Session and Cache

```env
SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false

CACHE_STORE=database
QUEUE_CONNECTION=database
```

#### Logging

```env
LOG_CHANNEL=stack
LOG_STACK=single
LOG_LEVEL=error
LOG_DEPRECATIONS_CHANNEL=null
```

#### Mail Configuration (Optional)

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@your-domain.com"
MAIL_FROM_NAME="${APP_NAME}"
```

#### File Storage

```env
FILESYSTEM_DISK=local
```

#### Broadcasting

```env
BROADCAST_CONNECTION=log
```

### 4.2 Generate New Application Key (Recommended)

If you want to generate a new application key:

1. Use an online Laravel key generator, or
2. Run locally: `php artisan key:generate --show`
3. Update the `APP_KEY` environment variable

## 🐳 Step 5: Docker Configuration (If Needed)

### 5.1 Create Dockerfile (Optional)

If Coolify doesn't auto-detect, create a `Dockerfile` in your repository:

```dockerfile
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/storage

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
```

## 🚀 Step 6: Deploy the Application

### 6.1 Initial Deployment

1. Click **"Deploy"** button in Coolify
2. Monitor the build logs for any errors
3. Wait for the deployment to complete

### 6.2 Post-Deployment Setup

Once deployed, you need to run database migrations:

1. Access the application container terminal in Coolify
2. Run the following commands:

```bash
# Run database migrations
php artisan migrate --force

# (Optional) Seed the database
php artisan db:seed --force

# Create storage link
php artisan storage:link

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

## 🌍 Step 7: Domain Configuration

### 7.1 Set Up Domain

1. In Coolify, go to your application settings
2. Click on **"Domains"**
3. Add your domain name
4. Enable **"Generate SSL Certificate"** for HTTPS

### 7.2 Update Environment Variables

Update the `APP_URL` environment variable with your actual domain:

```env
APP_URL=https://your-actual-domain.com
```

## 🔍 Step 8: Verification and Testing

### 8.1 Check Application Status

1. Verify all services are running (green status)
2. Check application logs for any errors
3. Test database connectivity

### 8.2 Test Application Features

1. Visit your application URL
2. Test the frontend portfolio display
3. Access admin panel: `/admin/dashboard`
4. Verify all functionality works correctly

## 🛠️ Step 9: Monitoring and Maintenance

### 9.1 Set Up Monitoring

1. Enable application monitoring in Coolify
2. Set up log aggregation
3. Configure alerts for downtime

### 9.2 Regular Maintenance

-   Monitor application logs regularly
-   Keep dependencies updated
-   Backup database regularly
-   Monitor disk space and performance

## 🚨 Troubleshooting

### Common Issues and Solutions

#### 1. Database Connection Error

```bash
# Check database service status
# Verify environment variables
# Ensure database is accessible from app container
```

#### 2. Permission Errors

```bash
# Fix storage permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 3. Asset Loading Issues

```bash
# Rebuild assets
npm run build
# Clear caches
php artisan cache:clear
php artisan view:clear
```

#### 4. 500 Internal Server Error

```bash
# Check application logs
# Verify .env configuration
# Ensure all required extensions are installed
```

## 📞 Support

If you encounter issues:

1. Check Coolify documentation
2. Review application logs in Coolify dashboard
3. Verify environment variables are correctly set
4. Ensure database service is running and accessible

## 🔄 Step 10: Continuous Deployment Setup

### 10.1 Automatic Deployments

Coolify can automatically deploy when you push to your GitHub repository:

1. In application settings, go to **"Git"**
2. Enable **"Automatic Deployment"**
3. Set deployment trigger to **"Push to main branch"**
4. Configure webhook URL in your GitHub repository settings

### 10.2 Deployment Hooks

Add custom deployment commands in Coolify:

**Pre-deployment commands:**

```bash
# Clear caches before deployment
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

**Post-deployment commands:**

```bash
# Run after successful deployment
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan queue:restart
```

## 🔐 Step 11: Security Best Practices

### 11.1 Environment Security

-   Never commit `.env` files to repository
-   Use strong, unique passwords for database
-   Regularly rotate application keys and secrets
-   Enable two-factor authentication for Coolify

### 11.2 Application Security

-   Keep Laravel and dependencies updated
-   Enable HTTPS/SSL certificates
-   Configure proper file permissions
-   Use secure session configuration

### 11.3 Database Security

-   Use dedicated database user with minimal privileges
-   Enable database SSL if available
-   Regular security updates for database service
-   Implement database backup encryption

## 📊 Step 12: Performance Optimization

### 12.1 Application Performance

```bash
# Enable OPcache for PHP
# Configure proper memory limits
# Use Redis for caching (optional)
# Enable gzip compression
```

### 12.2 Database Performance

-   Configure proper database indexes
-   Monitor query performance
-   Set appropriate connection pool sizes
-   Regular database maintenance

### 12.3 Coolify Resource Allocation

-   Allocate sufficient CPU and memory
-   Monitor resource usage
-   Scale horizontally if needed
-   Configure proper health checks

## 🔧 Advanced Configuration

### 12.1 Custom Build Process

If you need a custom build process, create a `coolify.yml` file:

```yaml
# coolify.yml
version: "1"
build:
    commands:
        - composer install --optimize-autoloader --no-dev
        - npm ci
        - npm run build
        - php artisan config:cache
        - php artisan route:cache
        - php artisan view:cache
deploy:
    commands:
        - php artisan migrate --force
        - php artisan storage:link
healthcheck:
    path: /up
    interval: 30s
    timeout: 10s
    retries: 3
```

### 12.2 Queue Workers (Optional)

If your application uses queues:

1. Create a new service for queue worker
2. Use the same repository and environment variables
3. Set custom start command: `php artisan queue:work --daemon`

### 12.3 Redis Cache (Optional)

For better performance, add Redis service:

1. Add Redis service to your project
2. Update environment variables:

```env
CACHE_STORE=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
REDIS_HOST=redis-service-name
REDIS_PORT=6379
```

## 🎉 Conclusion

Your Laravel Portfolio should now be successfully deployed on Coolify with production-ready configuration! The application will be accessible via your configured domain and will automatically update when you push changes to your GitHub repository.

### Final Checklist:

-   ✅ Database service running and accessible
-   ✅ Application deployed and responding
-   ✅ Environment variables properly configured
-   ✅ Domain and SSL certificate configured
-   ✅ Database migrations completed
-   ✅ Storage permissions set correctly
-   ✅ Production optimizations applied
-   ✅ Monitoring and logging enabled

### Maintenance Reminders:

-   Keep your environment variables secure
-   Regularly backup your database
-   Monitor application performance and logs
-   Update dependencies as needed
-   Review security settings periodically
-   Test deployment process in staging environment

Your Laravel Portfolio is now live and ready to showcase your work! 🚀
