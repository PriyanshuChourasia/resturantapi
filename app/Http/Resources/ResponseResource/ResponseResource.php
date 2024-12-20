<?php

namespace App\Http\Resources\ResponseResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
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

    public function with(Request $request): array
    {
        return [
            'success' => true,
            'status' => 'Successfully Fetched',
            'code' => 0
        ];
    }
}
