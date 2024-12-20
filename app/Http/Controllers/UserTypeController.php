<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserType\StoreUserTypeRequest;
use App\Http\Resources\UserType\UserTypeCollection;
use App\Http\Resources\UserType\UserTypeResource;
use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserTypeCollection(UserType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserTypeRequest $storeUserTypeRequest)
    {
        $data = $storeUserTypeRequest->validated();
        $userType = UserType::create($data);
        return new UserTypeResource($userType);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        return new UserTypeResource($userType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();
        return response()->json([
            'data' => [
                'message' => 'Record Deleted Successfully'
            ],
            'success' => true
        ]);
    }
}
