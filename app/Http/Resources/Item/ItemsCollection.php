<?php

namespace App\Http\Resources\Item;

use App\Http\Resources\ResponseResource\ResponseCollection;
use Illuminate\Http\Request;

class ItemsCollection extends ResponseCollection
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
