<?php

namespace App\Services;

use App\Http\Requests\ItemGroup\ItemGroupStoreRequest;
use App\Http\Requests\ItemGroup\ItemGroupUpdateRequest;

interface IItemGroupService
{

    function getAll();
    function getById(string $id);
    function store(ItemGroupStoreRequest $request);
    function update(ItemGroupUpdateRequest $request, string $id);
    function delete(string $id);
}
