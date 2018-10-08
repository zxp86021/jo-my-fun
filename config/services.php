<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),         // Your facebook Client ID
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'), // Your facebook Client Secret
        'redirect' => 'http://127.0.0.1:8000/auth/facebook-callback',
    ],

    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID'),         // Your twitter Client ID
        'client_secret' => env('TWITTER_CLIENT_SECRET'), // Your twitter Client Secret
        'redirect' => 'http://127.0.0.1:8000/auth/twitter-callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),         // Your google Client ID
        'client_secret' => env('GOOGLE_CLIENT_SECRET'), // Your google Client Secret
        'redirect' => 'http://127.0.0.1:8000/auth/google-callback',
    ],

];
