<?php

namespace App\Http\Resources\Item;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class ItemsResource extends ResponseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
