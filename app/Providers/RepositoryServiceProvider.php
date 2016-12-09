<?php
namespace App\Providers;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Contracts\UserRepositoryContract::class,
            \App\Repositories\Eloquent\UserRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ArticleRepositoryContract::class,
            \App\Repositories\Eloquent\ArticleRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\BookmarkRepositoryContract::class,
            \App\Repositories\Eloquent\BookmarkRepository::class
        );
    }
}