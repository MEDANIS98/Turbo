# Turbo
Auto Parts Store

[![Build Status](https://travis-ci.org/CaddyDz/Turbo.svg?branch=master)](https://travis-ci.org/CaddyDz/Turbo)
[![codecov](https://codecov.io/gh/CaddyDz/Turbo/branch/master/graph/badge.svg)](https://codecov.io/gh/CaddyDz/Turbo)
[![StyleCI](https://github.styleci.io/repos/111581376/shield?branch=master)](https://github.styleci.io/repos/111581376)

# Installation Instruction:

## Prerequisites:

* PHP 7.4
* MariaDB 10.4.13
* SQLite 3
* For media library (necessary for image conversion)
	* imagemagick
	* php-gd
	* jpegoptim
	* optipng
	* pngquant
	* gifsicle
	* svgo

### On Linux
```shell
sudo apt install jpegoptim optipng pngquant gifsicle
sudo npm install -g svgo
```
### On macOS using [Homebrew](https://brew.sh/)
```shell
brew install jpegoptim
brew install optipng
brew install pngquant
brew install svgo
brew install gifsicle
```

1. Copy `.env.example` to `.env`
```shell
cp .env.example .env
```
2. Install dependencies via composer
```shell
composer install
```
3. Generate application hashing and encryption key
```shell
php artisan key:generate
```
4. Configure database connection in `.env`
```
DB_DATABASE=turbo
DB_USERNAME=Your MySQL username here
DB_PASSWORD=Your MySQL password here
```
5. Migrate and seed the database
```shell
php artisan migrate:refresh --seed
```
6. Link storage to a publicly accessible endpoint
```shell
php artisan storage:link
```
7. Ensure everything works
```shell
vendor/bin/phpunit
```
