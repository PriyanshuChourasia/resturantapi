<?php

namespace App\Http\Controllers;

use App\Services\IItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    protected $itemService;

    public function __construct(IItemService $itemService)
    {
        $this->itemService = $itemService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->itemService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->itemService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->itemService->getById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->itemService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->itemService->delete($id);
    }
}
