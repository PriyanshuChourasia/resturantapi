<?php

namespace App\Services;

use App\Http\Requests\ItemCategory\ItemCategoryStoreRequest;
use App\Http\Requests\ItemCategory\ItemCategoryUpdateRequest;

interface IItemCategoryService
{

    function getAll();
    function getById(string $id);
    function store(ItemCategoryStoreRequest $request);
    function update(ItemCategoryUpdateRequest $request, string $id);
    function delete(string $id);
}
