<?php

namespace App\Http\Resources\Item;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class ItemResource extends ResponseResource
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
            'costPrice' => $this->cost_price,
            'mrp' => $this->mrp,
            'unitRatio' => $this->unit_ratio,
            'alias' => $this->alias,
            'itemUnitId' => $this->item_unit_id,
            'altUnitId' => $this->alt_unit_id,
            'itemGroupId' => $this->item_groups_id,
            'itemCategoryId' => $this->item_categories_id,
        ];
    }
}
