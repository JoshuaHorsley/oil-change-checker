# Oil Change Checker

A small Laravel app that determines whether a car is due for an oil change based on odometer and date inputs.
A car is considered due if more than 5000 km have passed since the last oil change, or if the last oil change was more than 6 months ago.

## Requirements
- PHP 8.3 or higher
- Composer
- SQLite

> Note: This project was scaffolded on Laravel 13 (the current release at the
  time of writing). The app code itself does not rely on Laravel 13–specific features.

## Setup

Clone the repository and install dependencies:

```bash
git clone https://github.com/JoshuaHorsley/oil-change-checker.git
cd oil-change-checker
composer install
```

Copy the environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

Create the SQLite database file and run migrations:

```bash
touch database/database.sqlite
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```
The app will be available at `http://127.0.0.1:8000`.

## Usage

Visit the homepage and submit the form with:

- The current odometer reading (km)
- The date of the previous oil change
- The odometer reading at the previous oil change (km)

The app validates the input, saves the submission and redirects to a unique results page that displays whether the car is due for an oil change, along with the submitted values.

## Project Notes
- Each form submission is persisted to the `oil_checks` table and is accessible at `/result/{id}`.
- The Windows shell command for creating the SQLite file is `type nul > database\database.sqlite` if `touch` is not available.
