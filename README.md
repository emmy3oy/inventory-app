# Inventory Management System

A simple Inventory Management System built with Laravel.

The application allows a small shop to manage its products through a basic CRUD system.

## Features

* Add a product
* View all products
* View a single product
* Edit a product
* Delete a product
* Prevent duplicate product names
* Prevent negative prices
* Prevent negative quantities
* Validate required fields
* Display success and validation messages

## Product Fields

Each product contains:

* **Name**
* **Price**
* **Quantity**
* **Description**

## Technologies Used

* PHP
* Laravel
* MySQL
* HeidiSQL
* Blade
* HTML
* CSS
* Vite
* Laragon

## Project Requirements

Before running the project, make sure you have:

* PHP 8.3 or later
* Composer
* Node.js
* NPM
* MySQL
* Laragon

## Installation

Clone or download the project into the Laragon `www` directory.

Example:

```text
C:\laragon\www\inventory-app
```

Open the project in your terminal:

```bash
cd C:\laragon\www\inventory-app
```

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

## Environment Configuration

Create your `.env` file from `.env.example`.

Configure the database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_app
DB_USERNAME=root
DB_PASSWORD=
```

Make sure MySQL is running in Laragon.

Create a database named:

```text
inventory_app
```

The database can be viewed and managed using HeidiSQL.

## Database Migration

Run:

```bash
php artisan migrate
```

This creates the required database tables.

The main application table is:

```text
products
```

## Product Table

The `products` table contains:

| Column      | Type             | Description         |
| ----------- | ---------------- | ------------------- |
| id          | BIGINT           | Unique product ID   |
| name        | VARCHAR          | Product name        |
| price       | DECIMAL          | Product price       |
| quantity    | UNSIGNED INTEGER | Available stock     |
| description | TEXT             | Product description |
| created_at  | TIMESTAMP        | Creation date       |
| updated_at  | TIMESTAMP        | Last update date    |

The product name has a unique database constraint to prevent duplicate names.

## Running the Application

Start the Laravel development server:

```bash
php artisan serve
```

Start Vite in another terminal:

```bash
npm run dev
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Project Structure

Important files in the project:

```text
app/
├── Http/
│   └── Controllers/
│       └── ProductController.php
│
└── Models/
    └── Product.php

database/
└── migrations/
    └── create_products_table.php

resources/
├── css/
│   └── app.css
│
└── views/
    ├── layouts/
    │   └── app.blade.php
    │
    └── products/
        ├── index.blade.php
        ├── create.blade.php
        ├── show.blade.php
        └── edit.blade.php

routes/
└── web.php
```

## CRUD Routes

Laravel's resource controller provides the following routes:

| Method    | URL                        | Purpose               |
| --------- | -------------------------- | --------------------- |
| GET       | `/products`                | View all products     |
| GET       | `/products/create`         | Show add product form |
| POST      | `/products`                | Store a new product   |
| GET       | `/products/{product}`      | View one product      |
| GET       | `/products/{product}/edit` | Show edit form        |
| PUT/PATCH | `/products/{product}`      | Update product        |
| DELETE    | `/products/{product}`      | Delete product        |

These routes are created with:

```php
Route::resource('products', ProductController::class);
```

## Validation

### Product Name

The name is:

* Required
* A string
* Maximum 255 characters
* Unique

### Price

The price is:

* Required
* Numeric
* Minimum `0`

### Quantity

The quantity is:

* Required
* An integer
* Minimum `0`

### Description

The description is:

* Optional
* A string

## Application Flow

The application follows the Laravel MVC pattern:

```text
Browser
   ↓
Route
   ↓
Controller
   ↓
Model
   ↓
MySQL Database
   ↓
Model
   ↓
Controller
   ↓
Blade View
   ↓
Browser
```

For example, when viewing all products:

```text
/products
    ↓
web.php
    ↓
ProductController@index
    ↓
Product::all()
    ↓
MySQL products table
    ↓
products.index
    ↓
Browser
```

## Author

Built as a Laravel CRUD learning project.
