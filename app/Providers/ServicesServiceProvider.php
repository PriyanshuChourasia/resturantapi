<?php

namespace App\Providers;

use App\Services\IItemGroupService;
use App\Services\IItemService;
use App\Services\Impl\ItemGroupService;
use App\Services\Impl\ItemService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(IItemService::class, ItemService::class);
        $this->app->bind(IItemGroupService::class, ItemGroupService::class);
    }
}
