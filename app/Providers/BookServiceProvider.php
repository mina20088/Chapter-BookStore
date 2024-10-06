<?php

namespace App\Providers;

use App\Services\BookService;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(BookService::class, function ($app)
        {
            return new BookService();
        });
    }

    public function boot(): void
    {
    }
}
