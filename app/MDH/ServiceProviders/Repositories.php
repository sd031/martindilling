<?php namespace MDH\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class Repositories extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'MDH\Repositories\PostRepositoryInterface',
            'MDH\Repositories\Eloquent\PostRepository'
        );
    }
}
