<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is el nombre de tu aplicación, que se usa en notificaciones
    | u otros elementos de UI donde se muestra el nombre de la app.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | Define el entorno en el que tu aplicación se ejecuta (local, producción, etc.).
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | En modo debug, los mensajes de error detallados con rastros se muestran.
    | Si está deshabilitado, solo se verá una página de error genérica.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | La URL base de la aplicación utilizada por Artisan para generar enlaces.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Define la zona horaria utilizada por la aplicación.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | Define el idioma predeterminado de la aplicación.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | Esta clave es utilizada por los servicios de cifrado de Laravel.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Hide
    |--------------------------------------------------------------------------
    |
    | Oculta información sensible cuando APP_DEBUG está activado.
    |
    */

    'debug_hide' => [
        '_ENV' => [
            'APP_KEY',
            'DB_PASSWORD',
        ],
        '_SERVER' => [
            'APP_KEY',
            'DB_PASSWORD',
        ],
        '_POST' => [
            'password',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | Controla cómo Laravel maneja el modo de mantenimiento.
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],
];
