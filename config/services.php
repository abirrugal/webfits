<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

        'facebook' => [
        'client_id' => '758208755023085',
        'client_secret' => '35e0d11de396dd2a1e771da8ce5d4e4a',
        'redirect' => 'https://ecustomizebd.com/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '989900992224-imqdv8l0s4lkcnoc1906aesuff7nk1od.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
        'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
        'redirect' => 'https://0a41-106-212-124-50.ngrok.io/google/callback/'
],

];
