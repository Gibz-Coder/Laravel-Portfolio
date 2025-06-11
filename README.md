# 🚀 LaraFolio - Laravel Portfolio Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/TailwindCSS-4.0-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="TailwindCSS">
  <img src="https://img.shields.io/badge/SQLite-Database-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

<p align="center">
  <strong>A modern, feature-rich portfolio management system built with Laravel 12 and TailwindCSS</strong>
</p>

---

## 📋 Table of Contents

- [About LaraFolio](#about-larafolio)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)

---

## 🎯 About LaraFolio

LaraFolio is a comprehensive portfolio management system designed for developers, designers, and creative professionals. Built with Laravel 12 and modern web technologies, it provides a robust admin panel for managing your portfolio content and a beautiful frontend to showcase your work.

### ✨ Key Highlights

- **Modern Architecture**: Built on Laravel 12 with PHP 8.2+ support
- **Responsive Design**: Mobile-first approach with TailwindCSS 4.0
- **Admin Dashboard**: Comprehensive content management system
- **Database Agnostic**: SQLite for development, easily configurable for production
- **Developer Friendly**: Clean code structure with proper MVC architecture

---

## 🚀 Features

### 📊 Admin Panel
- **Dashboard Overview**: Quick stats and recent activities
- **About Management**: Edit personal information and bio
- **Skills Management**: Add, edit, and organize technical skills
- **Services Management**: Manage service offerings
- **Media Library**: Upload and organize images and documents
- **Content Management**: Full CRUD operations for all portfolio sections

### 🎨 Frontend Features
- **Responsive Portfolio**: Beautiful, mobile-optimized portfolio display
- **Dynamic Content**: All content managed through admin panel
- **SEO Optimized**: Clean URLs and meta tag management
- **Fast Loading**: Optimized assets and efficient database queries

### 🔧 Technical Features
- **Database Migrations**: Version-controlled database schema
- **Seeders**: Sample data for quick setup
- **Form Validation**: Robust server-side validation
- **Error Handling**: Custom 404 pages and error management
- **Asset Compilation**: Vite for modern asset bundling

---

## 🛠 Tech Stack

### Backend
- **Framework**: Laravel 12.x
- **Language**: PHP 8.2+
- **Database**: SQLite (development) / MySQL/PostgreSQL (production)
- **Testing**: Pest PHP

### Frontend
- **CSS Framework**: TailwindCSS 4.0
- **Build Tool**: Vite 6.2+
- **JavaScript**: Modern ES6+ with Axios for HTTP requests

### Development Tools
- **Package Manager**: Composer (PHP) + npm (Node.js)
- **Code Quality**: Laravel Pint for code formatting
- **Development Server**: Laravel Artisan serve + Vite dev server

---

## 📋 Requirements

- **PHP**: 8.2 or higher
- **Composer**: Latest version
- **Node.js**: 18.x or higher
- **npm**: 9.x or higher
- **SQLite**: For development database

---

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/Gibz-Coder/Laravel-Portfolio.git
cd Laravel-Portfolio/LaraFolio
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Create SQLite database
touch database/database.sqlite
```

### 5. Database Setup
```bash
# Run migrations
php artisan migrate

# Seed the database with sample data
php artisan db:seed
```

### 6. Build Assets
```bash
# For development
npm run dev

# For production
npm run build
```

### 7. Start Development Server
```bash
# Option 1: Use Laravel's built-in server
php artisan serve

# Option 2: Use the convenient dev script (runs server + queue + vite)
composer run dev
```

Visit `http://localhost:8000` to see your portfolio!

---

## 📖 Usage

### Admin Panel Access
Navigate to `/admin/dashboard` to access the admin panel where you can:

- **Manage About Section**: Update your personal information and bio
- **Add Skills**: Showcase your technical skills and expertise levels
- **Manage Services**: List the services you offer
- **Upload Media**: Manage your portfolio images and documents

### Frontend Portfolio
The main portfolio is accessible at the root URL (`/`) and displays:
- Your personal information
- Skills and expertise
- Services offered
- Contact information

---

## 📁 Project Structure

```
LaraFolio/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/           # Admin panel controllers
│   │   └── PageController.php
│   └── Models/              # Eloquent models
├── database/
│   ├── migrations/          # Database schema migrations
│   └── seeders/            # Database seeders
├── resources/
│   ├── views/
│   │   ├── admin/          # Admin panel views
│   │   ├── layouts/        # Layout templates
│   │   └── includes/       # Reusable components
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript files
├── routes/
│   └── web.php             # Web routes
└── public/                 # Public assets
```

---

## 🌐 API Endpoints

### Admin Routes
| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/admin/dashboard` | Admin dashboard |
| GET | `/admin/abouts` | Edit about section |
| PATCH | `/admin/abouts` | Update about section |
| GET | `/admin/medias` | Media library |
| POST | `/admin/medias` | Upload media |
| DELETE | `/admin/medias/{media}` | Delete media |
| GET | `/admin/services` | Services management |
| POST | `/admin/services` | Create service |
| GET | `/admin/services/{service}/edit` | Edit service |
| PATCH | `/admin/services/{service}` | Update service |
| DELETE | `/admin/services/{service}` | Delete service |
| GET | `/admin/skills` | Skills management |

### Public Routes
| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/` | Portfolio homepage |

---

## 🧪 Testing

Run the test suite using Pest PHP:

```bash
# Run all tests
php artisan test

# Run tests with coverage
php artisan test --coverage

# Run specific test file
php artisan test tests/Feature/ExampleTest.php
```

---

## 🔧 Development

### Code Style
This project uses Laravel Pint for code formatting:

```bash
# Format code
./vendor/bin/pint

# Check code style without fixing
./vendor/bin/pint --test
```

### Database Management
```bash
# Create new migration
php artisan make:migration create_table_name

# Create new seeder
php artisan make:seeder TableNameSeeder

# Refresh database with seeders
php artisan migrate:refresh --seed
```

### Asset Development
```bash
# Watch for changes (development)
npm run dev

# Build for production
npm run build
```

---

## 🤝 Contributing

We welcome contributions to LaraFolio! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**: `git checkout -b feature/amazing-feature`
3. **Commit your changes**: `git commit -m 'Add amazing feature'`
4. **Push to the branch**: `git push origin feature/amazing-feature`
5. **Open a Pull Request**

### Development Guidelines
- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation as needed
- Use meaningful commit messages

---

## 📝 Changelog

### Version 1.0.0 (Current)
- ✅ Initial release with Laravel 12
- ✅ Admin panel for content management
- ✅ Skills management system
- ✅ Services management
- ✅ Media library
- ✅ Responsive frontend design
- ✅ TailwindCSS 4.0 integration

---

## 🐛 Known Issues

- None currently reported

---

## 📞 Support

If you encounter any issues or have questions:

1. Check the [Issues](https://github.com/Gibz-Coder/Laravel-Portfolio/issues) page
2. Create a new issue with detailed information
3. Include steps to reproduce the problem

---

## 📄 License

This project is open-sourced software licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

## 🙏 Acknowledgments

- **Laravel Team** - For the amazing framework
- **TailwindCSS Team** - For the utility-first CSS framework
- **Vite Team** - For the fast build tool
- **Open Source Community** - For continuous inspiration

---

<p align="center">
  <strong>Built with ❤️ using Laravel & TailwindCSS</strong>
</p>

<p align="center">
  <a href="https://github.com/Gibz-Coder/Laravel-Portfolio">⭐ Star this repository if you found it helpful!</a>
</p>
