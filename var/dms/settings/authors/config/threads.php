<?php

namespace AuthorsDMS\Config;

return [

    /*
    |--------------------------------------------------------------------------
    | Default settings
    |--------------------------------------------------------------------------
    */
    // minimum vertical scaling
    'minimum' => 2,
    // maximum vertical scaling
    'maximum' => 30,
    // triggers used by scaling mechanism
    'triggers' => [
        35 => 1,
        55 => 2,
        75 => 5,
        90 => 10,
    ],
    // How many times the thread will live - default: 1 hour
    'ttl' => 3600,
    // Haw many jobs before restart the thread - default: 1800
    'max_jobs' => 1800,

    /*
    |--------------------------------------------------------------------------
    | Infrastructure default thread settings
    |--------------------------------------------------------------------------
    */
    'infrastructure' => [
        'minimum' => 1,
        'maximum' => 1,
        'enabled' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | Centralized configuration default thread settings
    |--------------------------------------------------------------------------
    */
    'configuration' => [
        'minimum' => 1,
        'maximum' => 1,
        'enabled' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | Worker thread(s) default settings
    |--------------------------------------------------------------------------
    */
    'worker' => [
        'channels' => [
            'authors/inbound/commands' => [
                'minimum' => 10,
                'maximum' => 50,
                'enabled' => true,
            ],
            'authors/inbound/responses' => [
                'minimum' => 5,
                'maximum' => 50,
                'enabled' => true,
            ],
            'authors/inbound/events' => [
                'minimum' => 5,
                'maximum' => 50,
                'enabled' => true,
            ],
        ],
        'enabled' => true
    ],
];
