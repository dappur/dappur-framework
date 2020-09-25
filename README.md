# Dappur PHP Framework

A stylish PHP application framework crafted using Slim, Twig, Eloquent and Sentinel designed to get you from clone to production in a matter of minutes.

Built on the Slim PHP Micro Framework, Twig templating engine, Eloquent ORM database interactions, Phinx database migrations, Sentinel user management, Monolog w/ Logentries Support, form validation with CSRF protection, cookie management, database controlled config,Cloudinary CMS integration, blog, SEO, oauth2 login, and two-factor authentication.

This is a lightweight full featured framework intended for PHP developers who need an open source, fast and reliable platform to build your apps from.  Have your new projects up and running in minutes with the provided basic bootstrap pages and basic bootstrap admin.

## Important Links
**[Demo](https://demo.dappur.io)**  
**[Documentation](https://docs.dappur.io)**  
**[Changelog](https://github.com/dappur/framework/blob/master/CHANGELOG.md)**  
**[dApp CLI](https://github.com/dappur/dapp)**

## Quick Start Via Vagrant
Once installed, run `vagrant up` in the project root to provision a box that contains:

    - Ubuntu 18
    - PHP 7.2
    - Composer
    - Phinx
    - MariaDB 10.3
    - Apache 2

The script will also fetch dependencies, create a `dev` database, and run the initial migration for you.  Services will be accessible through:
- **Web Server:** http://localhost:8181
- **Phpmyadmin:** http://localhost:8181/phpmyadmin
- **MySQL Direct:** localhost:8306

## [Frontend Theme](https://github.com/dappur/theme-dappur)
This framework comes with several pre-made Bootstrap pages to help get your project moving. All of these pages and their respective controllers/views provide you an insight into how the framework functions including form validation, CSRF, working with Eloquent ORM and other plugins.  You can expand on the default template or create a completely new template using Twig and the front-end framework of your choosing.

## [Dashboard Theme](https://github.com/dappur/theme-AdminLTE)
In addition to the few basic front end templates, this framework also comes pre-built with a basic Bootstrap 3 admin dashboard. This dashboard can be accessed automatically by logging in with the admin user credentials.

## //TODO
* Create Documentation
* Beef up the dApp CLI
* Add Unit Testing

## Pre-Requisites
[PHP](https://secure.php.net/) - PHP is a popular general-purpose scripting language that is especially suited to web development

[MySQL Server](https://github.com/mysql/mysql-server) - MySQL Server, the world's most popular open source database, and MySQL Cluster, a real-time, open source transactional database.

[Composer](https://getcomposer.org/) - Dependency manager is required in order to use the Dappur PHP Framework.  [Installation Instructions](https://getcomposer.org/doc/00-intro.md)

[Phinx](https://phinx.org/) - Phinx is required in order to utilize the database migrations.  It is recommended that you install Phinx globally via composer by running:
```bash
$ composer global require robmorgan/phinx
```

## Install with [dApp](https://github.com/dappur/dapp) (Experimental)
This command clones your project via the `composer create-project` command and downloads the themes as well as prepare your `settings.json` file.
```bash
$ dapp new new_app
```

## Install Via Composer
#### Step 1 (Create the project)
You can start a new project user the Composer `create-project` command.
```bash
$ composer create-project dappur/framework new_app
```

#### Step 2 (Install the themes)
If you install via composer, you will have to install both of the themes manually.  Simply copy the theme folder from the theme repository into you `app/views` folder inside your project.  If you are using a custom theme, you will have to change the initial migration to support that theme before you migrate your database.
- [Dappur - Frontend Theme](https://github.com/dappur/theme-dappur)
- [AdminLTE - Dashboard Theme](https://github.com/dappur/theme-AdminLTE)

#### Step 3 (Prepare settings.json file)
Inside the root of your project, you will need to copy the `settings.json.dist` to `settings.json`.
```bash
$ cp settings.json.dist settings.json
```
Once copied, open `settings.json` and change the "framework" name to your project name.  You can also set up any other options as well as your database credentials.

## Initial Database Migration
If you are not using Vagrant, you have one more step to go before you are live.  You will need to ensure that you database credentials are correct in `settings.json` and then run the following command in a terminal from your root project directory:
```bash
$ phinx migrate
```

## Run & Test Project
If you've chosen to use vagrant, you can simply visit the configured URL:PORT after completing the `vagrant up` command. Otherwise, once you have successfully done the initial migration, you can simply use PHP's built in web server to test your application by running the following from your root project directory:
```bash
$ php -S localhost:8181 -t public
```

Navigate to [http://localhost:8181](http://localhost:8181) to view your project.

**Default Admin Username:** `admin`  
**Default Admin Password:** `admin123`

It is HIGHLY recommended that you change the password immediately after your initial migration.

## Created Using
* [Slim](https://github.com/slimphp/Slim) - Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs
* [Slim Twig-View](https://github.com/slimphp/Twig-View) - Slim Framework 3 view helper built on top of the Twig 2 templating component
* [Slim Flash Messaging](https://github.com/slimphp/Slim-Flash) - Slim Framework Flash message service provider
* [Slim CSRF](https://github.com/slimphp/Slim-Csrf) - Slim Framework 3 CSRF protection middleware
* [Slim Validation](https://github.com/awurth/slim-validation) - A validator for Slim micro-framework using [Respect\Validation](https://github.com/Respect/Validation)
* [Cartalyst Sentinel](https://github.com/cartalyst/sentinel) - PHP 5.4+ Fully-featured Authentication & Authorization System
* [Illuminate Database](https://github.com/illuminate/database) - The Illuminate Database component is a full database toolkit for PHP, providing an expressive query builder, ActiveRecord style ORM, and schema builder.
* [Monolog Logging](https://github.com/Seldaek/monolog) - Send logs to files, sockets, inboxes, databases and various web services.
* [Fig Cookies](https://github.com/dflydev/dflydev-fig-cookies) - Cookies for PSR-7 HTTP Message Interface.
* [Phinx Database Migrations](https://github.com/robmorgan/phinx) - Phinx makes it ridiculously easy to manage the database migrations for your PHP app.
* [Cloudinary Image CDN](https://github.com/cloudinary/cloudinary_php) - Cloudinary is a cloud service that offers a solution to a web application's entire image management pipeline.
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - A full-featured email creation and transfer class for PHP.
* [Paginator](https://github.com/jasongrimes/php-paginator) - A lightweight PHP paginator, for generating pagination controls in the style of Stack Overflow and Flickr.
* [UUID](https://github.com/ramsey/uuid) - A PHP library for generating RFC 4122 version 1, 3, 4, and 5 universally unique identifiers (UUID).
* [Jobby](https://github.com/jobbyphp/jobby) - Manage all your cron jobs without modifying crontab. Handles locking, logging, error emails, and more.
* [TwoFactorAuth](https://github.com/RobThree/TwoFactorAuth) - PHP library for Two Factor Authentication (TFA / 2FA)