<?php


namespace App\Services\Impl;


use App\Http\Requests\ItemGroup\ItemGroupStoreRequest;
use App\Http\Resources\Item\ItemsCollection;
use App\Http\Resources\ItemGroup\ItemGroupCollection;
use App\Http\Resources\ItemGroup\ItemGroupResource;
use App\Models\ItemGroup;
use App\Services\IItemGroupService;

class ItemGroupService implements IItemGroupService
{


    function getAll()
    {
        return new ItemGroupCollection(ItemGroup::all());
    }
    function getById(string $id) {}
    function store(ItemGroupStoreRequest $request)
    {
        $data = $request->validated();
        $response = ItemGroup::create($data);
        return new ItemGroupResource($response);
    }
    function update(ItemGroupStoreRequest $request, string $id) {}
    function delete(string $id) {}
}
