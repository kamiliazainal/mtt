## System Requirements

- PHP 8.2 or higher
- Composer
- SQLite
- Node.js & NPM (for frontend assets)
- Docker & Docker Compose (if using Docker installation)

## Database Schema

The application uses the following database structure:

- **customers** - id, name, email, state
- **categories** - id, name
- **products** - id, name, category_id, price
- **orders** - id, customer_id, order_date, total_amount
- **order_items** - id, order_id, product_id, quantity, unit_price

## Installation

### Option 1: Installation with Docker (Laravel Sail)

#### Step 1: Clone the repository
```bash
git clone <repository-url>
cd <project-directory>
```

#### Step 2: Install dependencies
```bash
docker run --rm \
    -v ${PWD}:/app \
    -w /app \
    laravelsail/php83-composer:latest \
    composer install
```

#### Step 3: Copy environment file
```bash
cp .env.example .env
```

#### Step 4: Configure environment variables
Edit `.env` file and set your database to SQLite:
```env
DB_CONNECTION=sqlite
# DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD not needed for SQLite
```

#### Step 5: Create SQLite database file
```bash
touch database/database.sqlite
```

#### Step 6: Start Docker containers
```bash
./vendor/bin/sail up -d
```

#### Step 7: Generate application key
```bash
./vendor/bin/sail artisan key:generate
```

#### Step 8: Run migrations
```bash
./vendor/bin/sail artisan migrate
```

#### Step 9: Seed the database
```bash
./vendor/bin/sail artisan db:seed
```

#### Step 10: Install frontend dependencies
```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

#### Access the application
Open your browser and visit: `http://localhost`

---

### Option 2: Installation without Docker

#### Step 1: Clone the repository
```bash
git clone <repository-url>
cd <project-directory>
```

#### Step 2: Install PHP dependencies
```bash
composer install
```

#### Step 3: Copy environment file
```bash
cp .env.example .env
```

#### Step 4: Configure environment variables
Edit `.env` file and set your database to SQLite:
```env
DB_CONNECTION=sqlite
# DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD not needed for SQLite
```

#### Step 5: Create SQLite database file
```bash
touch database/database.sqlite
```

#### Step 6: Generate application key
```bash
php artisan key:generate
```

#### Step 6: Create database
Create a MySQL database with the name specified in your `.env` file:
```sql
CREATE DATABASE your_database_name;
```

#### Step 7: Run migrations
```bash
php artisan migrate
```

#### Step 8: Seed the database
```bash
php artisan db:seed
```

#### Step 9: Install frontend dependencies
```bash
npm install
npm run dev
```

#### Step 10: Start development server
```bash
php artisan serve
```

#### Access the application
Open your browser and visit: `http://localhost:8000`

---

## Database Seeding

### Default Seeders

The application includes seeders for all necessary tables:

```bash
# Seed all tables
php artisan db:seed

# Or with Docker
./vendor/bin/sail artisan db:seed
```

### Custom Seeding Options

#### Seed specific tables:
```bash
php artisan db:seed --class=CustomerSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=OrderSeeder
```

#### Fresh migration with seeding:
```bash
# Without Docker
php artisan migrate:fresh --seed

# With Docker
./vendor/bin/sail artisan migrate:fresh --seed
```

### Sample Data

The seeders will create:
- **50 customers** from various states
- **10 product categories** (Electronics, Clothing, Books, Home & Garden, Sports & Outdoors, Toys & Games, Health & Beauty, Automotive, Food & Beverage, Office Supplies)
- **43 products** across different categories
- **90 orders** from June 2024 to November 2025
- **200+ order items** with varying quantities and prices

## Usage

### Generating Reports

1. Navigate to the Report page (`/report`) or click on the Report menu on the sidebar
2. Select a start date and end date
3. Click "Generate Report"
4. View the summary metrics and detailed order table

### Exporting to Excel

1. Generate a report with your desired date range
2. Click the "Download Excel" button

## Key Features Explained

### Top 3 Products Logic
- Example: If quantities are [3,2,2,1,1], shows products with 3,2,2
- Example: If quantities are [3,2,1,1,1], shows products with 3,2
- Example: If quantities are [5,5,5,5,2,1], shows only first 3 products with 5

### Summary Metrics

- **Total Orders**: Count of all order items (rows in detailed table)
- **Total Revenue**: Sum of all subtotals (quantity × unit_price)
- **Average Order Value**: Total Revenue ÷ Total Orders
- **Top 3 Products**: Best-selling products based on quantity sold

## Package Dependencies

### Core Packages
- `laravel/framework`: ^11.0
- `maatwebsite/laravel-excel`: ^3.1 (for Excel exports)

### Development Packages
- `laravel/sail`: ^1.26 (for Docker support)

### Known Limitations
1. Date range selection is required to view any data
2. No pagination on the detailed orders table (all items load at once)

## Development Commands

### With Docker (Sail)
```bash
# Start containers
./vendor/bin/sail up -d

# Stop containers
./vendor/bin/sail down

# Run artisan commands
./vendor/bin/sail artisan <command>

# Run composer commands
./vendor/bin/sail composer <command>

# View logs
./vendor/bin/sail logs
```

### Without Docker
```bash
# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run tests
php artisan test
```
---

**Built with Laravel 11 & Laravel Sail**
