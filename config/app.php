<?php

use Tymon\JWTAuth\Providers\LaravelServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Hidden Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'debug_blacklist' => [
        '_ENV' => array_keys($_ENV),
        '_SERVER' => [
            'APP_NAME',
            'APP_ENV',
            'APP_URL',
            'APP_DEBUG',
            'APP_KEY',
            'LOG_CHANNEL',
            'DB_CONNECTION',
            'DB_PORT',
            'DB_HOST',
            'DB_DATABASE',
            'DB_USERNAME',
            'DB_PASSWORD',
            'BROADCAST_DRIVER',
            'CACHE_DRIVER',
            'QUEUE_CONNECTION',
            'SESSION_DRIVER',
            'SESSION_LIFETIME',
            'REDIS_HOST',
            'REDIS_PASSWORD',
            'REDIS_PORT',
            'MAIL_DRIVER',
            'MAIL_HOST',
            'MAIL_PORT',
            'MAIL_USERNAME',
            'MAIL_PASSWORD',
            'MAIL_ENCRYPTION',
            'MAIL_FROM_ADDRESS',
            'MAIL_FROM_NAME',
            'AWS_ACCESS_KEY_ID',
            'AWS_SECRET_ACCESS_KEY',
            'AWS_DEFAULT_REGION',
            'AWS_BUCKET',
            'PUSHER_APP_ID',
            'PUSHER_APP_KEY',
            'PUSHER_APP_SECRET',
            'PUSHER_APP_CLUSTER',
            'MIX_PUSHER_APP_KEY',
            'MIX_PUSHER_APP_CLUSTER',
            'DOCK_USERNAME',
            'DOCK_PASSWORD',
            'ZOOP_SELLER_FORTS',
            'ZOOP_SELLER_SMB',
            'EMAIL_STARK',
            'PASSWORD_STARK',
            'WORKSPACE_STARK',
            'PLATFORM_STARK',
            'RATE_INVESTIMENT',
            'CONTEXT_DOCUMENT_ROOT',
            'CONTEXT_PREFIX',
            'DOCUMENT_ROOT',
            'GATEWAY_INTERFACE',
            'H2PUSH',
            'H2_PUSH',
            'H2_PUSHED',
            'H2_PUSHED_ON',
            'H2_STREAM_ID',
            'H2_STREAM_TAG',
            'HTTP2',
            'HTTPS',
            'HTTP_ACCEPT',
            'HTTP_ACCEPT_ENCODING',
            'HTTP_ACCEPT_LANGUAGE',
            'HTTP_CACHE_CONTROL',
            'HTTP_COOKIE',
            'HTTP_HOST',
            'HTTP_REFERER',
            'HTTP_SEC_FETCH_MODE',
            'HTTP_SEC_FETCH_SITE',
            'HTTP_SEC_FETCH_USER',
            'HTTP_UPGRADE_INSECURE_REQUESTS',
            'HTTP_USER_AGENT',
            'HTTP_X_HTTPS',
            'PATH',
            'PHP_INI_SCAN_DIR',
            'QUERY_STRING',
            'REDIRECT_H2PUSH',
            'REDIRECT_H2_PUSH',
            'REDIRECT_H2_PUSHED',
            'REDIRECT_H2_PUSHED_ON',
            'REDIRECT_H2_STREAM_ID',
            'REDIRECT_H2_STREAM_TAG',
            'REDIRECT_HTTP2',
            'REDIRECT_HTTPS',
            'REDIRECT_REDIRECT_H2PUSH',
            'REDIRECT_REDIRECT_H2_PUSH',
            'REDIRECT_REDIRECT_H2_PUSHED',
            'REDIRECT_REDIRECT_H2_PUSHED_ON',
            'REDIRECT_REDIRECT_H2_STREAM_ID',
            'REDIRECT_REDIRECT_H2_STREAM_TAG',
            'REDIRECT_REDIRECT_HTTP2',
            'REDIRECT_REDIRECT_HTTPS',
            'REDIRECT_REDIRECT_SCRIPT_URI',
            'REDIRECT_REDIRECT_SCRIPT_URL',
            'REDIRECT_REDIRECT_SSL_TLS_SNI',
            'REDIRECT_REDIRECT_STATUS',
            'REDIRECT_REDIRECT_UNIQUE_ID',
            'REDIRECT_SCRIPT_URI',
            'REDIRECT_SCRIPT_URL',
            'REDIRECT_SSL_TLS_SNI',
            'REDIRECT_STATUS',
            'REDIRECT_UNIQUE_ID',
            'REDIRECT_URL',
            'REMOTE_ADDR',
            'REMOTE_PORT',
            'REQUEST_METHOD',
            'REQUEST_SCHEME',
            'REQUEST_URI',
            'SCRIPT_FILENAME',
            'SCRIPT_NAME',
            'SCRIPT_URI',
            'SCRIPT_URL',
            'SERVER_ADDR',
            'SERVER_ADMIN',
            'SERVER_NAME',
            'SERVER_PORT',
            'SERVER_PROTOCOL',
            'SERVER_SIGNATURE',
            'SERVER_SOFTWARE',
            'SSL_TLS_SNI',
            'TZ',
            'UNIQUE_ID',
            'PHP_SELF',
            'REQUEST_TIME_FLOAT',
            'REQUEST_TIME',
            'argv',
            'argc',
            'APP_NAME',
            'APP_ENV',
            'APP_URL',
            'APP_DEBUG',
            'APP_KEY',
            'LOG_CHANNEL',
            'DB_CONNECTION',
            'DB_PORT',
            'DB_HOST',
            'DB_DATABASE',
            'DB_USERNAME',
            'DB_PASSWORD',
            'BROADCAST_DRIVER',
            'CACHE_DRIVER',
            'QUEUE_CONNECTION',
            'SESSION_DRIVER',
            'SESSION_LIFETIME',
            'REDIS_HOST',
            'REDIS_PASSWORD',
            'REDIS_PORT',
            'MAIL_DRIVER',
            'MAIL_HOST',
            'MAIL_PORT',
            'MAIL_USERNAME',
            'MAIL_PASSWORD',
            'MAIL_ENCRYPTION',
            'MAIL_FROM_ADDRESS',
            'MAIL_FROM_NAME',
            'AWS_ACCESS_KEY_ID',
            'AWS_SECRET_ACCESS_KEY',
            'AWS_DEFAULT_REGION',
            'AWS_BUCKET',
            'PUSHER_APP_ID',
            'PUSHER_APP_KEY',
            'PUSHER_APP_SECRET',
            'PUSHER_APP_CLUSTER',
            'MIX_PUSHER_APP_KEY',
            'MIX_PUSHER_APP_CLUSTER',
            'DOCK_USERNAME',
            'DOCK_PASSWORD',
            'ZOOP_SELLER_FORTS',
            'ZOOP_SELLER_SMB',
            'EMAIL_STARK',
            'PASSWORD_STARK',
            'WORKSPACE_STARK',
            'PLATFORM_STARK',
            'RATE_INVESTIMENT',
        ],
        '_POST' => [
            'password',
        ],
        '_COOKIE' => [
            'roundcube_cookies',
            'XSRF-TOKEN',
            'forts_bank_session'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
        BrunoCouty\BuscaViaCep\BuscaViaCepServiceProvider::class,
        Rebing\GraphQL\GraphQLServiceProvider::class,
        Anhskohbo\NoCaptcha\NoCaptchaServiceProvider::class,

        /*
         * Application Service Providers...
         */
        AppBank\Providers\AppServiceProvider::class,
        AppBank\Providers\AuthServiceProvider::class,
        // AppBank\Providers\BroadcastServiceProvider::class,
        AppBank\Providers\EventServiceProvider::class,
        AppBank\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'GraphQL' => 'Rebing\GraphQL\Support\Facades\GraphQL',
        'JWTAuth' => 'Tymon\JWTAuth\Facades\JWTAuth',
        'JWTFactory' => 'Tymon\JWTAuth\Facades\JWTFactory',
        'NoCaptcha' => Anhskohbo\NoCaptcha\Facades\NoCaptcha::class,

    ],

];
