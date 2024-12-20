<?php

namespace App\Http\Resources\Designation;

use App\Http\Resources\ResponseResource\ResponseResource;
use Illuminate\Http\Request;

class DesignationResource extends ResponseResource
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
