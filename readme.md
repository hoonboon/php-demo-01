# PHP - Laravel 5.8 - Getting Started

# References
- [Part 1: Laravel 5.8 From Scratch: Intro, Setup , MVC Basics, and Views.](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-intro-setup-mvc-basics-and-views-74d46f93fe0c)
- [Part 2: Laravel 5.8 From Scratch: Config, ENV, Migrations, and Todos CRUD.](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-config-env-migrations-and-todos-crud-7c771bcac802)
- [Part 3: Laravel 5.8 From Scratch: Authentication, Middleware, Email Verify, and Password Reset.](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-authentication-middleware-email-verify-and-password-reset-93a4b2103794)
- [Part 4: Laravel 5.8 From Scratch: Eloquent Relationships and Image Upload](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-eloquent-relationships-and-image-upload-49daece52a24)
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

> Whenever you making changes to .env file then don’t forget to restart the server ( if you are using laravel dev server) and if you are using a virtual host and changes don’t seem to take effect then just run php artisan config:clear (This command will clear the configuration cache) in your terminal.
