<?php

namespace App\Services;

use App\Http\Requests\ItemGroup\ItemGroupStoreRequest;

interface IItemGroupService
{

    function getAll();
    function getById(string $id);
    function store(ItemGroupStoreRequest $request);
    function update(ItemGroupStoreRequest $request, string $id);
    function delete(string $id);
}
