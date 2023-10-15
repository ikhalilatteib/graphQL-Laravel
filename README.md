# Introduction
This is a simple project to demonstrate how to use the graphQL with Laravel.
The project is a simple blog with posts and categories.
## Objectives
- Learn how to use the graphQL with Laravel, and how to use the Lighthouse package.
## Technologies used
- Laravel v10.28
- PHP v8.2
- MySQL v8.0
- Docker v24.0.6
## Packages used
- [Lighthouse](https://lighthouse-php.com/) v9.1
- [Laravel Media Library](https://spatie.be/docs/laravel-medialibrary/v9/introduction) v10.13
- [Laravel Sluggable](https://github.com/spatie/laravel-sluggable) v3.5
## How to run
1. Clone the repository
2. Run the command to create the .env file
```bash
cp .env.example .env
```
2. Run the command to install the dependencies
```bash
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php82-composer:latest \
  composer install --ignore-platform-reqs
```
3. Run the command to start the containers
```bash
./vendor/bin/sail up -d
```
4. Run the command to generate the key
```bash
./vendor/bin/sail artisan key:generate
```
5. Run the command to run the migrations
```bash
./vendor/bin/sail artisan migrate
```
6. Run the command to run the seeders
```bash
./vendor/bin/sail artisan db:seed
```
7. Run the command to generate the storage link
```bash
./vendor/bin/sail artisan storage:link
```
## How to use
1. Open the browser and access the url: http://localhost:8000/graphql-playground
