#!/bin/sh
cd Turbo
git pull
composer install --optimize-autoloader --no-dev
art migrate
