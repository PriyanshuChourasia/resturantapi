<?php


namespace App\Services\Impl;


use App\Http\Requests\ItemUnit\ItemUnitStoreRequest;
use App\Http\Requests\ItemUnit\ItemUnitUpdateRequest;
use App\Http\Resources\ItemUnit\ItemUnitCollection;
use App\Http\Resources\ItemUnit\ItemUnitResource;
use App\Models\ItemUnit;
use App\Services\IItemUnitService;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemUnitService implements IItemUnitService
{


    function getAll()
    {
        return new ItemUnitCollection(ItemUnit::all());
    }


    function getById(string $id)
    {
        return new ItemUnitResource($id);
    }


    function store(ItemUnitStoreRequest $request)
    {
        $data = $request->validated();
        $response = ItemUnit::create($data);
        return new ItemUnitResource($response);
    }



    function update(ItemUnitUpdateRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $itemUnit = ItemUnit::findOrFail($id);
            $itemUnit->update($data);
            return new ItemUnitResource($itemUnit);
        } catch (Exception $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }


    function delete(string $id)
    {
        $data = ItemUnit::findOrFail($id)->delete();
        return response()->json([
            'success' => $data,
            'status' => 'Record Deleted',
            'code' => 0
        ]);
    }
}
