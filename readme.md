# Algolia Sample with Data Set 


# Overview

This app runs off of laravel + vue + algolia

# Installation

> make sure you have an algolia account before moving forward

* git clone git@github.com:shalomabitan/algolia-test.git
* cd algolia-test
* composer install
* cp .env.example .env
* php artisan key:generate

> Note: make sure you have set up your `.env` file with everything you'll need
> such as Database variable and `ALGOLIA_APP_ID`, `ALGOLIA_SECRET`, `ALGOLIA_SEARCH`
> I personally like to use `DATABASE_URL=postgres://shalomabitan:@127.0.0.1:5432/something` for the database

* php artisan migrate
* php artisan scout:import 'App\Record'
* php artisan data:reset
* npm install
* npm run watch


and you should be done. 

# How it works

using a console command, you can easily refresh the data. This was amde a console command because it is easy to run it as a cron process. Currently, the data is updated and synced with Algolia synchronously, however if you decide to install Laravel Queues [super simple](https://laravel.com/docs/5.5/queries) then you should change the appropriate queueing method. 

Once the command is run and the data is stored in the DB, the frontend will be using Algolia's Vue.js InstantSearch package to make the search brillantly fast. I followed the post from their [site](https://www.algolia.com/doc/tutorials/getting-started/getting-started-with-laravel-scout-vuejs/) and it was a breeze.

# TODO

write tests to make sure that the data is coming in

