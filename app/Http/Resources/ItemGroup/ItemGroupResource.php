<?php

namespace App\Http\Resources\ItemGroup;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class ItemGroupResource extends ResponseResource
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
