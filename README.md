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
- Clone the project
- Run `docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php82-composer:latest \
  composer install --ignore-platform-reqs`
- Run `./vendor/bin/sail up`
- Run `./vendor/bin/sail artisan migrate`
- Run `./vendor/bin/sail artisan db:seed`
- Run `./vendor/bin/sail artisan storage:link`
## How to use
- Open the browser and go to `http://localhost:8000/graphql-playground`

