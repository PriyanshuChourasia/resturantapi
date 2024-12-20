<?php

namespace App\Http\Resources\ResponseResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ResponseCollection extends ResourceCollection
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

    public function with(Request $request): array
    {
        $count = count($this) > 1 ? 'Records Fetched' : 'Record Fetched';
        return [
            'success' => true,
            'status' => count($this) . ' ' . $count,
            'code' => 0
        ];
    }
}
