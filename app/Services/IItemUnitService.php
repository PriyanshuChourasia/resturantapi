<?php

namespace App\Services;

use App\Http\Requests\ItemUnit\ItemUnitStoreRequest;
use App\Http\Requests\ItemUnit\ItemUnitUpdateRequest;

interface IItemUnitService
{

    function getAll();
    function getById(string $id);
    function store(ItemUnitStoreRequest $request);
    function update(ItemUnitUpdateRequest $request, string $id);
    function delete(string $id);
}
