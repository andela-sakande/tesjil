##  Tesjil

[![Build Status](https://travis-ci.org/andela-sakande/tesjil.svg?branch=develop)](https://travis-ci.org/andela-sakande/tesjil)
[![Coverage Status](https://coveralls.io/repos/github/andela-sakande/tesjil/badge.svg?branch=develop)](https://coveralls.io/github/andela-sakande/tesjil?branch=develop)
[![StyleCI](https://styleci.io/repos/52866482/shield)](https://styleci.io/repos/52866482)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-sakande/tesjil/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-sakande/tesjil/?branch=master)

## Usage

To download and use this project you need to have the following installed on your machine

- Composer
  Visit the [official website](https://getcomposer.org/doc/00-intro.md) for installation instructions.
- Laravel homestead
  Visit [Laravel website](http://laravel.com/docs/5.1/homestead) for installation and setup instructions.

When you have completed the above processes, run:

```bash
$ git clone https://github.com/andela-sakande/schoo
`````
to clone the repository to your working directory. This step presumes that you have git set up and running.

Run

```bash
$ composer install
```
to pull in the project dependencies.

Make a .env file modelled after the .env.example and set your parameters

generate APP_KEY using

```bash
    php artisan key:generate
```

Also run on homestead environment
```bash
    php artisan migrate
```
to configure your database.
Now you are set up and ready to run.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

Tesjil is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
