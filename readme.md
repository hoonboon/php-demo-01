# PHP - Laravel 5.8 - Getting Started

# References
- [Part 1: Laravel 5.8 From Scratch: Intro, Setup , MVC Basics, and Views.](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-intro-setup-mvc-basics-and-views-74d46f93fe0c)
- ...
- [Github: Complete project source codes.](https://github.com/SagarMaheshwary/laravel-basics)

This is an example application built on Laravel and Bootstrap for beginners.

## Running this web application

- make sure you already have [xampp](https://www.apachefriends.org/index.html) installed.

- clone this repository to your local machine or just download the zip from the above green button.

- install [Composer](https://getcomposer.org/download) first, then run this command in your command-line (you should be inside your project directory). 
```bash
  composer install
```

- rename .env.example to .env and add your database and mail driver credentials ([mailtrap](https://mailtrap.io) is preferred).

- generate application key.

```bash
    php artisan key:generate
```

- create tables.

```bash
    php artisan migrate
```

- Link the public disk for image upload (this will create a symbolic link to storage/app/public directory).
```bash
    php artisan storage:link
```

- Start the development server.

```bash
    php artisan serve
```

> In Laravel, all the requests are directed to index.php in public directory so, if it does not work with your apache then create a virtual host or use dev server instead of opening it from http://localhost/your-laravel-project/public
