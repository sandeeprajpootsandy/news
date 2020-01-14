<?php

return [
    
        
        'google' => [
            'client_id' => '949584300140-vkol028o17oof06kqubjok1nt15lplfg.apps.googleusercontent.com',
            'client_secret' => 'zzxKPpyzd-WWXF42wq6y-c4M',
            'redirect' => 'http://localhost/blog/auth/google/callback',
        ],
      

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
        'client_id' => '2486726768271449',
        'client_secret' => '45dc4b1b083f31da97eea5649212dcdc',
        'redirect' => 'http://localhost/blog/auth/facebook/callback',
    ],



];
