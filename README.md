# Goodrich Pest Control Website

## Overview
A Laravel-based website for Goodrich Pest Control featuring the Seesa Super 2000 Gold Sprayers and related products, built using a professional template.

## Features
- Product showcase (Seesa Super 2000 Gold Sprayers)
- Parts catalog (spraying components and maintenance parts)
- Chemical products listing
- Professional services information
- Contact form with email notifications

## Technical Details
- Laravel Framework
- Template-based design
- Responsive layout
- Email notification system

## Requirements
- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL or SQLite

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd goodrich-pest-control
```

2. Install dependencies
```bash
composer install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure email settings in .env:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=nithish.n6@gmail.com
MAIL_PASSWORD=your-app-specific-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=nithish.n6@gmail.com
MAIL_FROM_NAME="Goodrich Pest Control"
```

5. Start the server
```bash
php artisan serve
```

## Project Structure

### Views
- `resources/views/layouts/` - Base layouts and navigation
- `resources/views/pages/` - Individual page templates
- `resources/views/emails/` - Email templates

### Assets
- `public/assets/css/` - Stylesheet files
- `public/assets/js/` - JavaScript files
- `public/assets/images/` - Image assets
- `public/assets/fonts/` - Font files

### Routes
Main routes in `routes/web.php`:
- Home (`/`)
- Products (`/products`)
- Parts (`/parts/spraying`, `/parts/maintenance`)
- Chemicals (`/chemicals/insecticides`, `/chemicals/sanitizers`)
- Services (`/services`)
- Contact (`/contact`)

### Controllers
- `HomeController` - Main page
- `ProductController` - Product showcase
- `PartsController` - Parts catalog
- `ChemicalController` - Chemical products
- `ServiceController` - Services
- `ContactController` - Contact form & enquiries

### Data
Product and service information stored in:
- `config/data/product-data.json`

## Template Integration
The website uses a professional template with:
- Custom styling and components
- Responsive design
- Modern layout elements
- Icon fonts
- Interactive elements

## Contact Form
The enquiry form includes:
- Name, email, and phone fields
- Subject selection
- Message field
- Email notifications
  - Admin notification to nithish.n6@gmail.com
  - User confirmation email
- Toast messages for feedback

## Maintenance
To update content, modify:
- `config/data/product-data.json` for product/service information
- Email templates in `resources/views/emails/`
- Asset files in `public/assets/`

## License
[MIT License](LICENSE)
