# Hotel Management System made with Codeigniter 4

## What is codeigniter 4?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Server Requirement

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Installatioin

1 - Clone this project locally using the commmand

```git
git clone https://github.com/duclairdeugoue/ci4-hmsapp.git 
```

2 - Enter inside the project folder and create an empty folder named `cache` inside the folder writable

3 - Type the commands below to upgrade and install the project packages:

```php
composer update

composer install 
```

6 - Create your own branch to 'branch-name' using the command:

```bash
git checkout -b [branch-name]
```

7 - Open your phpMyAdmin in XAMPP, WAMPP or MAMP and and create a db named `hms_db` , make sure your user is `hms_admin` and his password is  `hms_admin` by creating this user and granting all permission.

8 - Go back to source IDE and type the command below to apply migrate the migrations

```php
php spark migrate
```

9 - Finally launch the application using the command

```php
php spark serve
```

and then start making your changes, Please make sure to send pull request to the main branch ***Do not merge any changes with the 'main' branch*** unless your are authorized to do so.

## Documentation
