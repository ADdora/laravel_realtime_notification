# Laravel 5.7 Realtime Notification

![peek 2018-11-19 20-45](https://user-images.githubusercontent.com/27032703/48727966-5438c680-ec3c-11e8-999d-71d60e939504.gif)

## Introduction

This a real time notification project using Laravel, Pusher and Laravel-Echo,
this project was built to send notification to the currently logged in user only via a private channel the currently logged in user id

## Installation Guidelines

1. `git clone https://github.com/mmabdelgawad/laravel_realtime_notification.git`

2. `cp .env.example .env`

3. `php artisan key:generate`

4. edit database configuration in `.env` file

    ```
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
    ```

5. add your pusher app keys `.env` file
    
    ```
        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=mt1
         
        MIX_PUSHER_APP_KEY=
        MIX_PUSHER_APP_CLUSTER=
    ```
 
 6. change you broadcast driver in `.env` file to pusher
 
    ```
        BROADCAST_DRIVER=pusher
    ```
  
 7. `composer install`
 
 8. `php artisan migrate`
 
 9. create new user
 
 10. open `localhost:8000/send` in browser 
 
 ## License
  
 Copyright &copy; 2018, [mmabdelgawad](https://github.com/mmabdelgawad)


