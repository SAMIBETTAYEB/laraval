<?php

/*
	Created by Sami Bettayeb. 
	Desktop/Web/Mobile developer.
*/

// Open the command line on the path you need to create your project on after installing composer and run this command: 
composer create-project laravel/laravel yourProjectName --prefer-dist
// Wait until creating and configuring the new project
// Create your database on MySQL for example (mydb)
// Under the created project edit the .env file to configure your project like this: 
 
DB_CONNECTION=mysql
DB_HOST= your host for example: 127.0.0.1 or localhost
DB_PORT= the db port, by default 3306
DB_DATABASE= the database name, in our example (mydb)
DB_USERNAME= the database username for example (root)
DB_PASSWORD= the database password.


// If you want to create a login && registration system you need to run this from the command line:
php artisan make:auth
// This will be applied on PHP files and code only, if you want to apply it on your DBMS run this from the command line: 
php artisan migrate
// If you want to run your project from the server run this command: 
php artisan serve
// The server should give you a link, in our case: 127.0.0.1:8000


// To migrate the your table to the database: 
php artisan make:model Table_
// It's recommanded to make the model name starts with capital case.


//To create a migration: 
php artisan make:migration mytable -create=table_s
// It's recommanded to make the table name the same as the model name, and make it ends with 's'

// If you want to migrate the tables: 
php artisan migrate

?>