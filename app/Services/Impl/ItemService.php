<?php


namespace App\Services\Impl;

use App\Http\Requests\Item\ItemsStoreRequest;
use App\Http\Requests\Item\ItemsUpdateRequest;
use App\Http\Resources\Item\ItemCollection;
use App\Http\Resources\Item\ItemResource;
use App\Models\Item;
use App\Services\IItemService;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemService implements IItemService
{

    // protected $ItemID = ['item_unit_id', 'item_groups_id', 'alt_unit_id', 'item_categories_id'];

    function getAll()
    {
        return new ItemCollection(Item::all());
    }
    function getById(string $id)
    {
        $data = Item::findOrFail($id);
        return new ItemResource($data);
    }
    function store(ItemsStoreRequest $request)
    {
        $data = $request->validated();
        $response = Item::create($data);
        return new ItemResource($response);
    }
    function update(ItemsUpdateRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $response = Item::findOrFail($id);
            $response->update($data);
            return new ItemResource($response);
        } catch (Exception $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }
    function delete(string $id)
    {
        $data = Item::findOrFail($id)->delete();
        return response()->json([
            'success' => $data,
            'status' => 'Record Deleted',
            'code' => 0
        ]);
    }
}
