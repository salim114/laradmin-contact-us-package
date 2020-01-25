<?php 
namespace kossa\Laradmin;

use Illuminate\Support\ServiceProvider;


class LaradminServiceProvider extends ServiceProvider
{

	public function boot()
	{

		
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		$this->loadViewsFrom(__DIR__ . '/views', 'laradmin');
		$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
		$this->mergeConfigFrom(
            __DIR__ . '/config/laradmin.php',
            'laradmin'
        );
         $this->publishes([
            __DIR__ . '/config/laradmin.php' => config_path('laradmin.php'),
        ]);


	}

	public function register()
	{
		
	}

	}
