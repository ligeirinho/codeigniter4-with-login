# Codeigniter4 with Myth:Auto, login package

[Codeigniter4](https://codeigniter4.github.io/userguide/)
[Myth:Auto](https://github.com/lonnieezell/myth-auth)

Flexible, Powerful, Secure auth package for CodeIgniter 4.

Installation
------------

Use [Composer] to install the packages:

composer update

Edit the .env file with your database credentials

Run the migration:

php spark migrate all

Edit app\Config\Auth.php file with your desired fromEmail and fromName

Run "php spark serve" and then visit http://localhost:8080