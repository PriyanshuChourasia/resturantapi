<?php

namespace App\Http\Resources\ItemGroup;

use App\Http\Resources\ResponseResource\ResponseCollection;
use Illuminate\Http\Request;

class ItemGroupCollection extends ResponseCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
