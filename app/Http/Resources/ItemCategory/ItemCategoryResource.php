<?php

namespace App\Http\Resources\ItemCategory;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class ItemCategoryResource extends ResponseResource
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
            'parentId' => $this->parent_id,
            'parent' => new ItemCategoryResource($this->whenLoaded('parent')),
            'alias' => $this->alias
        ];
    }
}
