<?php

namespace App\Providers;

use App\Services\IItemCategoryService;
use App\Services\IItemGroupService;
use App\Services\IItemService;
use App\Services\IItemUnitService;
use App\Services\Impl\ItemCategoryService;
use App\Services\Impl\ItemGroupService;
use App\Services\Impl\ItemService;
use App\Services\Impl\ItemUnitService;
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
        $this->app->bind(IItemUnitService::class, ItemUnitService::class);
        $this->app->bind(IItemCategoryService::class, ItemCategoryService::class);
    }
}
