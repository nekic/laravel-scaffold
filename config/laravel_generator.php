<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/databases/migrations/' : database_path('migrations/'),

        'model'             => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Models/' : app_path('Models/'),

        'datatables'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/DataTables/' : app_path('DataTables/'),

        'livewire_tables'   => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Livewire/' : app_path('Http/Livewire/'),

        'repository'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Repositories/' : app_path('Repositories/'),

        'routes'            => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/routes/web.php' : base_path('routes/web.php'),

        'api_routes'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/routes/api.php' : base_path('routes/api.php'),

        'request'           => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Requests/' : app_path('Http/Requests/'),

        'api_request'       => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Requests/API/' : app_path('Http/Requests/API/'),

        'controller'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Controllers/' : app_path('Http/Controllers/'),

        'api_controller'    => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Controllers/API/' : app_path('Http/Controllers/API/'),

        'api_resource'      => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Http/Resources/' : app_path('Http/Resources/'),

        'schema_files'      => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/resources/model_schemas/' : resource_path('model_schemas/'),

        'seeder'            => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/seeders/' : database_path('seeders/'),

        'database_seeder'   => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/seeders/DatabaseSeeder.php' : database_path('seeders/DatabaseSeeder.php'),

        'factory'           => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/factories/' : database_path('factories/'),

        'view_provider'     => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/app/Providers/ViewServiceProvider.php' : app_path('Providers/ViewServiceProvider.php'),

        'tests'             => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/tests/' : base_path('tests/'),

        'repository_test'   => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/tests/Repositories/' : base_path('tests/Repositories/'),

        'api_test'          => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/tests/APIs/' : base_path('tests/APIs/'),

        'views'             => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/resources/views/' : resource_path('views/'),

        'menu_file'         => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/resources/views/layouts/menu.blade.php' : resource_path('views/layouts/menu.blade.php'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'App\Models',

        'datatables'        => 'App\DataTables',

        'livewire_tables'   => 'App\Http\Livewire',

        'repository'        => 'App\Repositories',

        'controller'        => 'App\Http\Controllers',

        'api_controller'    => 'App\Http\Controllers\API',

        'api_resource'      => 'App\Http\Resources',

        'request'           => 'App\Http\Requests',

        'api_request'       => 'App\Http\Requests\API',

        'seeder'            => 'Database\Seeders',

        'factory'           => 'Database\Factories',

        'tests'             => 'Tests',

        'repository_test'   => 'Tests\Repositories',

        'api_test'          => 'Tests\APIs',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates' => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Illuminate\Database\Eloquent\Model',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'soft_delete' => true,

        'save_schema_file' => true,

        'localized' => true,

        'repository_pattern' => true,

        'resources' => true,

        'factory' => true,

        'seeder' => false,

        'swagger' => true, // generate swagger for your APIs

        'tests' => true, // generate test cases for your APIs

        'excluded_fields' => ['id'], // Array of columns that doesn't required while creating module
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // e.g. admin or admin.shipping or admin.shipping.logistics

        'namespace' => '',  // e.g. Admin or Admin\Shipping or Admin\Shipping\Logistics

        'view' => '',  // e.g. admin or admin/shipping or admin/shipping/logistics
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Types
    |
    | Possible Options: blade, datatables, livewire
    |--------------------------------------------------------------------------
    |
    */

    'tables' => 'blade',

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */

    'from_table' => [

        'doctrine_mappings' => [],
    ],

];
