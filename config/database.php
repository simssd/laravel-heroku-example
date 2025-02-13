<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'pgsql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'remotemysql.com'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'dbkq9egtOX'),
            'username' => env('DB_DATABASE', 'dbkq9egtOX'),
            'password' => env('DB_DATABASE', 'gbONZwWatR'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ], 

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => parse_url(getenv('DATABASE_URL'), PHP_URL_HOST),
            'port' => parse_url(getenv('DATABASE_URL'), PHP_URL_PORT),
            'database' => substr(parse_url(getenv('DATABASE_URL'), PHP_URL_PATH), 1),
            'username' => parse_url(getenv('DATABASE_URL'), PHP_URL_USER),
            'password' => parse_url(getenv('DATABASE_URL'), PHP_URL_PASS),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => parse_url(env('REDIS_URL'), PHP_URL_HOST),
            'password' => parse_url(env('REDIS_URL'), PHP_URL_PASS),
            'port' => parse_url(env('REDIS_URL'), PHP_URL_PORT),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => parse_url(env('REDIS_URL'), PHP_URL_HOST),
            'password' => parse_url(env('REDIS_URL'), PHP_URL_PASS),
            'port' => parse_url(env('REDIS_URL'), PHP_URL_PORT),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
