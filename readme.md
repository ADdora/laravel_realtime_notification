# Laravel 5.7 Realtime Notification

![peek 2018-11-19 20-45](https://user-images.githubusercontent.com/27032703/48727966-5438c680-ec3c-11e8-999d-71d60e939504.gif)

## Introduction

This is a real time notification project using Laravel, Pusher and Laravel-Echo,
this project is built to send notification to the currently logged in user only via a private channel.

## Installation Guidelines

1. `git clone https://github.com/mmabdelgawad/laravel_realtime_notification.git`

2. `cp .env.example .env`

3. `composer install`

4. `php artisan key:generate`

5. edit database configuration in `.env` file

    ```
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
    ```

6. create a [Pusher](https://pusher.com) app and add your pusher app keys in `.env` file
    
    ```
        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=
         
        MIX_PUSHER_APP_KEY="" -> same as [PUSHER_APP_KEY]
        MIX_PUSHER_APP_CLUSTER="" -> same as [PUSHER_APP_CLUSTER]
    ```
 
 7. change broadcast driver in `.env` file to pusher
 
    ```
        BROADCAST_DRIVER=pusher
    ```
  
 8. `php artisan migrate`
 
 9. `php artisan serve`
 
 10. open `localhost:8000/register` and register a new user 
 
 10. hitting this link `localhost:8000/send` should send a notification to this user
 
 ## License
  
 Copyright &copy; 2018, [mmabdelgawad](https://github.com/mmabdelgawad)


