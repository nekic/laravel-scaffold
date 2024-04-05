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

        'model'             => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Models/' : app_path('Models/'),

        'datatables'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/DataTables/' : app_path('DataTables/'),

        'livewire_tables'   => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Livewire/' : app_path('Http/Livewire/'),

        'repository'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Repositories/' : app_path('Repositories/'),

        'routes'            => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/routes/web.php' : base_path('routes/web.php'),

        'api_routes'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/routes/api.php' : base_path('routes/api.php'),

        'request'           => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Requests/' : app_path('Http/Requests/'),

        'api_request'       => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Requests/API/' : app_path('Http/Requests/API/'),

        'controller'        => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Controllers/' : app_path('Http/Controllers/'),

        'api_controller'    => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Controllers/API/' : app_path('Http/Controllers/API/'),

        'api_resource'      => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Http/Resources/' : app_path('Http/Resources/'),

        'schema_files'      => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/resources/model_schemas/' : resource_path('model_schemas/'),

        'seeder'            => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/seeders/' : database_path('seeders/'),

        'database_seeder'   => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/seeders/DatabaseSeeder.php' : database_path('seeders/DatabaseSeeder.php'),

        'factory'           => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . '/database/factories/' : database_path('factories/'),

        'view_provider'     => env('LARAVEL_GENERATOR_BASE_PATH', null) ? env('LARAVEL_GENERATOR_BASE_PATH') . (env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? '/app' : '/src') . '/Providers/ViewServiceProvider.php' : app_path('Providers/ViewServiceProvider.php'),

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

        'model'             => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Models' :  env('LARAVEL_GENERATOR_NAMESPACE') . '\Models',

        'datatables'        => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\DataTables' : env('LARAVEL_GENERATOR_NAMESPACE') . '\DataTables',

        'livewire_tables'   => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Livewire' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Livewire',

        'repository'        => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Repositories' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Repositories',

        'controller'        => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Controllers' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Controllers',

        'api_controller'    => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Controllers\API' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Controllers\API',

        'api_resource'      => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Resources' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Resources',

        'request'           => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Requests' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Requests',

        'api_request'       => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'App\Http\Requests\API' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Http\Requests\API',

        'seeder'            => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'Database\Seeders' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Database\Factories',

        'factory'           => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'Database\Factories' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Database\Factories',

        'tests'             => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'Tests' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Tests',

        'repository_test'   => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'Tests\Repositories' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Tests\Repositories',

        'api_test'          => env('LARAVEL_GENERATOR_MODE', 'app') === 'app' ? 'Tests\APIs' : env('LARAVEL_GENERATOR_NAMESPACE') . '\Tests\APIs',
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

        'repository_pattern' => false,

        'resources' => true,

        'factory' => true,

        'seeder' => true,

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
