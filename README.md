# Introduction
Welcome to this straightforward project designed to demonstrate the practical use of GraphQL with Laravel. This project serves as a basic blog system featuring posts and categories.
### Understanding GraphQL
GraphQL is a query language for APIs and an execution engine for fulfilling these queries using your existing data. It offers a comprehensive and intuitive way to describe the data available in your API, granting clients the ability to request exactly what they need, without any excess information. GraphQL simplifies the process of evolving APIs over time and provides powerful tools for developers.

Here's a concise comparison between GraphQL and REST:
### REST:
- REST is an architectural style.
- REST is a protocol.
- REST is a collection of guidelines, rules, constraints, principles, and rules.

### GraphQL:
- GraphQL is a query language, not an architectural style or protocol.

## Objectives
The primary goals of this project are:
- To understand how to leverage GraphQL with Laravel.
-  To become proficient in using the graphql-laravel package for GraphQL in Laravel.
## Technologies used
This project utilizes the following technologies:
- Laravel v10.28
- PHP v8.2
- MySQL v8.0
- Docker v24.0.6
## Packages used
To achieve its functionality, this project incorporates several packages, including:
- [GraphQL Laravel](https://github.com/rebing/graphql-laravel) v9.1
- [Laravel Media Library](https://spatie.be/docs/laravel-medialibrary/v9/introduction) v10.13
- [Laravel Sluggable](https://github.com/spatie/laravel-sluggable) v3.5
## How to run
To execute this project, follow these steps:
1. Clone the repository to your local machine.
2. Generate a .env file by executing the following command:
```bash
cp .env.example .env
```
3. Install the project dependencies using Docker and Composer:
```bash
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php82-composer:latest \
  composer install --ignore-platform-reqs
```
4. Initiate the containers with the following command:
```bash
./vendor/bin/sail up -d
```
5. Generate an application key with:
```bash
./vendor/bin/sail artisan key:generate
```
6. Execute the database migrations:
```bash
./vendor/bin/sail artisan migrate
```
7. Populate the database with initial data:
```bash
./vendor/bin/sail artisan db:seed
```
8. Create a symbolic link for storage:
```bash
./vendor/bin/sail artisan storage:link
```
## How to use
Once the project is operational, follow these steps to make the most of it:

- Launch Postman or your preferred API testing tool.
- Create a new GraphQL request.
- Set the URL to http://your-domain/graphql (replace your-domain with your actual domain or local URL).

## Suggestions and Feedback
I value your input and welcome any suggestions or feedback you may have regarding this project.
If you encounter any issues, have ideas for improvements,
or wish to share your experience, please don't hesitate to reach out.
Your feedback will help me enhance and refine this project further.
For a comprehensive tutorial on building a GraphQL API using Laravel,
you can refer to the article on [FreeCodeCamp](https://www.freecodecamp.org/news/build-a-graphql-api-using-laravel/).
Thank you for your collaboration!
