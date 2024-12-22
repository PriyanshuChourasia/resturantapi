<?php


namespace App\Services\Impl;


use App\Http\Requests\ItemCategory\ItemCategoryStoreRequest;
use App\Http\Requests\ItemCategory\ItemCategoryUpdateRequest;
use App\Http\Resources\ItemCategory\ItemCategoryCollection;
use App\Http\Resources\ItemCategory\ItemCategoryResource;
use App\Models\ItemCategory;
use App\Services\IItemCategoryService;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemCategoryService implements IItemCategoryService
{


    function getAll()
    {
        return new ItemCategoryCollection(ItemCategory::all());
    }


    function getById(string $id)
    {
        return new ItemCategoryResource($id);
    }


    function store(ItemCategoryStoreRequest $request)
    {
        $data = $request->validated();
        $response = ItemCategory::create($data);
        return new ItemCategoryResource($response);
    }



    function update(ItemCategoryUpdateRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $itemCategory = ItemCategory::findOrFail($id);
            $itemCategory->update($data);
            return new ItemCategoryResource($itemCategory);
        } catch (Exception $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }


    function delete(string $id)
    {
        $data = ItemCategory::findOrFail($id)->delete();
        return response()->json([
            'success' => $data,
            'status' => 'Record Deleted',
            'code' => 0
        ]);
    }
}
