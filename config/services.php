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
    'region' => 'us-east-1',
    ],

    'sparkpost' => [
    'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
    'model' => App\User::class,
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    ],

    'bitbucket' => [
    'client_id' => 'rHTAzM9QPrYQTmazXn',
    'client_secret' => 'TR5sQRqeeatAgTS8sWx9uuJt4MaYESBa',
    'redirect' => 'http://bella.app',
    ],

    'facebook' => [
        'client_id' => '1472569522787173',
        'client_secret' => '391e500054c813e7b44f1ab98caf3781',
        'redirect' => 'http://bella.app'
    ]

    ];
