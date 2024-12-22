<?php


namespace App\Services\Impl;


use App\Http\Requests\ItemGroup\ItemGroupStoreRequest;
use App\Http\Requests\ItemGroup\ItemGroupUpdateRequest;
use App\Http\Resources\Item\ItemsCollection;
use App\Http\Resources\ItemGroup\ItemGroupCollection;
use App\Http\Resources\ItemGroup\ItemGroupResource;
use App\Models\ItemGroup;
use App\Services\IItemGroupService;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemGroupService implements IItemGroupService
{


    function getAll()
    {
        return new ItemGroupCollection(ItemGroup::all());
    }


    function getById(string $id)
    {
        return new ItemGroupResource($id);
    }


    function store(ItemGroupStoreRequest $request)
    {
        $data = $request->validated();
        $response = ItemGroup::create($data);
        return new ItemGroupResource($response);
    }



    function update(ItemGroupUpdateRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $itemGroup = ItemGroup::findOrFail($id);
            $itemGroup->update($data);
            return new ItemGroupResource($itemGroup);
        } catch (Exception $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }


    function delete(string $id)
    {
        $data = ItemGroup::findOrFail($id)->delete();
        return response()->json([
            'success' => $data,
            'status' => 'Record Deleted',
            'code' => 0
        ]);
    }
}
