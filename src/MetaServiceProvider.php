<?php

namespace Quill\Meta;

use Vellum\Module\Quill;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Quill\Meta\Listeners\RegisterMetaModule;
use Quill\Meta\Listeners\RegisterMetaPermissionModule;
use Quill\Meta\Resource\MetaResource;
use App\Resource\Meta\MetaRootResource;
use Quill\Meta\Models\MetaObserver;

class MetaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadModuleCommands();
        $this->loadRoutesFrom(__DIR__ . '/routes/meta.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'meta');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/meta.php', 'meta');

        MetaResource::observe(MetaObserver::class);

        if (class_exists('App\Resource\Meta\MetaRootResource')) {
        	MetaRootResource::observe(MetaObserver::class);
        }

        // $this->publishes([
        //     __DIR__ . '/config/meta.php' => config_path('meta.php'),
        // ], 'meta.config');

        // $this->publishes([
        //    __DIR__ . '/views' => resource_path('/vendor/meta'),
        // ], 'meta.views');

        $this->publishes([
        	__DIR__ . '/database/factories/MetaFactory.php' => database_path('factories/MetaFactory.php'),
            __DIR__ . '/database/seeds/MetaTableSeeder.php' => database_path('seeds/MetaTableSeeder.php'),
        ], 'meta.migration');
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterMetaModule::class);
        Event::listen(Quill::PERMISSION, RegisterMetaPermissionModule::class);
    }

    public function loadModuleCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([

            ]);
        }
    }
}
