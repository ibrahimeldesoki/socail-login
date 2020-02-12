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
        'client_id' => '489849808385029', //Facebook API
        'client_secret' => 'ca8c44ac700761c5566cbad24e578abc', //Facebook Secret
        'redirect' => 'https://demo.corinthi.com/login/facebook/callback',
    ],
    'google' => [
         'client_id' =>'1055268790332-uk0v8tpke3i9db0qbcbm6d2bl2k288al.apps.googleusercontent.com',
         'client_secret' =>'XvKr9y6ee_aoeDpQQBxR28sf',
         'redirect' => 'https://demo.corinthi.com/login/google/callback'
    ],
     'twitter' => [
                'client_id' =>'QYvf97IkOLGl1bjngeDW7ohka',
                'client_secret' =>'Z2RGkwmHKpoyYmJ4qXdzmWpsndx4i7ExZR2W58UI54BpwojTVw',
                'redirect' => 'http://127.0.0.1:8000/login/twitter/callback'
     ],
    'linkedin' => [
            'client_id' =>'77nrivo9cyagi8',
            'client_secret' =>'Nb7XcPzdfz8stJXc',
            'redirect' => 'https://demo.corinthi.com/login/linkedin/callback'
    ]


];
