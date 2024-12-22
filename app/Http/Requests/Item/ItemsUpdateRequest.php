<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'cost_price' => ['required', 'string'],
            'mrp' => ['nullable', 'string'],
            'unit_ratio' => ['nullable', 'string'],
            'alias' => ['nullable', 'string', 'max:255'],
            'item_unit_id' => ['required', 'string'],
            'alt_unit_id' => ['nullable', 'string'],
            'item_groups_id' => ['required', 'string'],
            'item_categories_id' => ['required', 'string']
        ];
    }
}
