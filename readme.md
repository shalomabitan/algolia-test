# Algolia Sample with Data Set 


# Overview

This app runs off of laravel + vue + algolia

# Installation

> make sure you have an algolia account before moving forward

* git clone git@github.com:shalomabitan/algolia-test.git
* cd algolia-test
* composer install
* php artisan key:generate

> Note: make sure you have set up your `.env` file with everything you'll need
> such as Database variable and `ALGOLIA_APP_ID`, `ALGOLIA_SECRET`, `ALGOLIA_SEARCH`
> I personally like to use `DATABASE_URL=postgres://shalomabitan:@127.0.0.1:5432/something` for the database

* php artisan migrate
* npm install
* npm run watch

and you should be done. 



