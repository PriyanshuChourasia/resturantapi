<?php

namespace App\Services;

use App\Http\Requests\Item\ItemsStoreRequest;
use App\Http\Requests\Item\ItemsUpdateRequest;

interface IItemService
{

    function getAll();
    function getById(string $id);
    function store(ItemsStoreRequest $request);
    function update(ItemsUpdateRequest $request, string $id);
    function delete(string $id);
}
