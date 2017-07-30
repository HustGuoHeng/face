<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Hanson\Face\Foundation\Face;

class FaceServiceProvider extends ServiceProvider
{

    protected $defer = true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Face::class, function($app){
            return new Face();
        });
    }
}