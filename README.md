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
* [Create posts table](database/migrations/2021_09_02_121350_create_posts_table.php)
* [Create Select Stored Procedure](database/migrations/2021_09_02_121502_create_super_select_procedure.php)
* [Create Insert Stored Procedure](database/migrations/2021_09_02_121452_create_super_insert_procedure.php)


### Execute methods
Checkout the methods created as an example in the:
* [Model Post](app/Models/Post.php)
  * `superInsert`
  * superSelect`
