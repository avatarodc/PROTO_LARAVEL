<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        // Add your repository bindings here
        // Example:
        // \App\Contracts\Repositories\UserRepositoryInterface::class => \App\Repositories\Eloquent\UserRepository::class,
    ];

    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
