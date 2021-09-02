# Laravel using Stored Procedures

> A project showing an option on how to use Stored Procedures using Laravel

## Clone repository

```bash
git clone git@github.com:victoryoalli/laravel-storedprocedures-example.git
```

## Install
```bash
cp .env.example .env
```
Create a database and change `DB_DATABASE` field in `.env` file to point to it.

```bash
composer install
php artisan migrate
```

## Structure

### Migrations
Checkout the migrations for:
* Create posts tables
* Create Select Stored Procedure
* Create Insert Stored Procedure


### Execute methods
Checkout the methods created as an example in the:
* Model `Post`
