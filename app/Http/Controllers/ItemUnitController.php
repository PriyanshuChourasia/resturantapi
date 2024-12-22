<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemUnit\ItemUnitStoreRequest;
use App\Http\Requests\ItemUnit\ItemUnitUpdateRequest;
use App\Services\IItemUnitService;

class ItemUnitController extends Controller
{

    protected $itemUnitService;
    public function __construct(IItemUnitService $itemUnitService)
    {
        $this->itemUnitService = $itemUnitService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->itemUnitService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemUnitStoreRequest $request)
    {
        return $this->itemUnitService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->itemUnitService->getById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUnitUpdateRequest $request, string $id)
    {
        return $this->itemUnitService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->itemUnitService->delete($id);
    }
}
