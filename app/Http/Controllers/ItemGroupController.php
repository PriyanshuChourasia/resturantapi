<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemGroup\ItemGroupStoreRequest;
use App\Models\ItemGroup;
use App\Services\IItemGroupService;
use Illuminate\Http\Request;

class ItemGroupController extends Controller
{

    protected $itemGroupService;
    public function __construct(IItemGroupService $itemGroupService)
    {
        $this->itemGroupService = $itemGroupService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->itemGroupService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemGroupStoreRequest $request)
    {
        return $this->itemGroupService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemGroup $itemGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemGroup $itemGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemGroup $itemGroup)
    {
        //
    }
}
