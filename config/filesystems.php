<?php

use Illuminate\Support\Facades\Storage;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | The default filesystem disk that should be used by the framework.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Configure as many filesystem disks as you wish.
    |
    */

    'disks' => [

        /*
        |-----------------
        | Local disk
        |-----------------
        */
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        /*
        |-----------------
        | Public disk
        |-----------------
        */
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        /*
        |---------------------------------------------------------
        | Private disk (Laravel Cloud Bucket / S3 compatible)
        |---------------------------------------------------------
        */
        'private' => (function () {

            $json = env('LARAVEL_CLOUD_DISK_CONFIG');

            // Local fallback (dev)
            if (!$json) {
                return [
                    'driver' => 'local',
                    'root' => storage_path('app/private'),
                    'visibility' => 'private',
                    'throw' => false,
                ];
            }

            $configs = json_decode($json, true);

            if (!is_array($configs)) {
                throw new RuntimeException('Invalid LARAVEL_CLOUD_DISK_CONFIG');
            }

            // Pick "private" disk or first available
            $disk = collect($configs)->firstWhere('disk', 'private') ?? $configs[0];

            return [
                'driver' => 's3',
                'key' => $disk['access_key_id'] ?? null,
                'secret' => $disk['access_key_secret'] ?? null,
                'region' => $disk['default_region'] ?? 'auto',
                'bucket' => $disk['bucket'] ?? null,
                'endpoint' => $disk['endpoint'] ?? null,
                'url' => $disk['url'] ?? null,
                'use_path_style_endpoint' => $disk['use_path_style_endpoint'] ?? false,
                'visibility' => 'private',
                'throw' => false,
            ];
        })(),

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | These links are created when running `php artisan storage:link`.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
