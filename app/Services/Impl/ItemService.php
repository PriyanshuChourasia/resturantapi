<?php


namespace App\Services\Impl;

use App\Http\Requests\Item\ItemsStoreRequest;
use App\Http\Requests\Item\ItemsUpdateRequest;
use App\Http\Resources\Item\ItemCollection;
use App\Models\Item;
use App\Services\IItemService;

class ItemService implements IItemService
{

    // protected $ItemID = ['item_unit_id', 'item_groups_id', 'alt_unit_id', 'item_categories_id'];

    function getAll()
    {
        return new ItemCollection(Item::all());
    }
    function getById(string $id) {}
    function store(ItemsStoreRequest $request) {}
    function update(ItemsUpdateRequest $request, string $id) {}
    function delete(string $id) {}
}
