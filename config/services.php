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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'workfront' => [
        'client_id' => env('WORKFRONT_CLIENT_ID', '1c1cff1090bc1aa159735dba8bf9c8a6'),
        'client_secret' => env('WORKFRONT_CLIENT_SECRET', '4VAB46Un-yNBNSO-CCyLsiOpC1zWr4VZsSQL8JIEGHo'),
        'redirect_uri' => env('WORKFRONT_REDIRECT_URI', 'https://app.wf-oauth.test/oauth/callback'),
        'url' => env('WORKFRONT_URL', 'https://jan2025wk2reports7.testdrive.workfront.com'),
    ]

];
