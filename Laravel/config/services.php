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

    'github' => [
        'client_id' => '8429b963bad67cccf57b',
        'client_secret' => '21fd8ac273bbe069fdd56b6459e30908d02c73b3',
        'redirect' => 'http://homestead.app/retorno/github',
],

    'facebook' => [
        'client_id' => '1074039942739807',
        'client_secret' => 'f4ab23198b6bd9857a68956f2297045d',
        'redirect' => 'http://homestead.app/retorno/facebook',
],
];
