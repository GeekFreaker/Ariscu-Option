# Ariscu-CRUD with Additional Functionality.

## Intro

An application that displays a task list with login, registration and
Task Searching.

First you need to:
1. ```npm install```
2. also ```composer install``` (ensure you have composer installed)
3. them you can serve up your code with a php server.

## Database

Create a database based on the content in the .env file on a system that is
running any MYSQL version.

. ```create database to_do_list;```
. ```GRANT ALL PRIVILEGES ON to_do_list.* to 'root'@'localhost';```
. ```exit;```

 then

. ```php artisan migrate```

then you can start-up a server
and walla ... Laravel the site is open! ;)

Then run migrations.

## Create, Update, Read & Delete

Application can create update read and delete all tasks.

## Search for Tasks

You can also search for tasks based on their "name" attribute.

## Edit View  

You can also edit that tasks themselves and update them.
