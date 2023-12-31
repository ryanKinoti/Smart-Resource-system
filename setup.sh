#!/bin/bash

#running the git clone
echo "Running git clone operation..."
git clone https://github.com/ari3skin/Smart-Resource-system.git

#entering the directory
echo "entering the directory..."
# shellcheck disable=SC2164
cd Smart-Resource-system

# run composer install
echo "Running composer install..."
composer install

# run composer update
echo "Running composer update..."
composer update

# require laravel/socialite
echo "Requiring laravel/socialite..."
composer require laravel/socialite

# copy .env.example .env
echo "Copying .env.example to .env..."
cp .env.example .env

# generate key
echo "Generating artisan key..."
php artisan key:generate

# run migrations and seed the database
echo "Running database migrations and seeding..."
php artisan migrate --seed

# serve the application
echo "Serving the application..."
php artisan serve
