<?php

namespace App\Http\Resources\ItemUnit;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class ItemUnitResource extends ResponseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'alias' => $this->alias,
        ];
    }
}
