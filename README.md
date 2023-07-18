Setup Instructions For Laravel API Rest Based PHP Application

Clone Github Repository: https://github.com/AhmedQureshi131/LaravelRestAPI.git

Open Terminal:

Install Dependencies: npm install

Install Packages: composer install

Move .env.example to .env: mv .env.example .env

Database: Mariadb/PHPMYADMIN

Create database with name: movies_db

Migrate data tables: php artisan migrate 

Generate Key:  php artisan key:generate

Run Server: php artisan serve

Go to: http://127.0.0.1:8000/

Require Technologies: 

   php: "^7.3|^8.0",
   guzzlehttp/guzzle: "^7.0.1",
   laravel/framework: "^8.75",
   phpunit/phpunit: "^9.5.10"
   Server version: 10.4.14-MariaDB - PHPMYADMIN,
   Text Editor: PHPSTORM,
   Public Repository: Github,
   Windows 10.
