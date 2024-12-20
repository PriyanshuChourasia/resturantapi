<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemsStoreRequest extends FormRequest
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
            'name' => ['string', 'required', 'max:255'],
            'cost_price' => ['string', 'required'],
            'mrp' => ['string', 'nullable'],
            'unit_ratio' => ['string', 'nullable'],
            'alias' => ['string', 'nullable', 'max:255'],
            'item_unit_id' => ['string', 'required'],
            'alt_unit_id' => ['string', 'required'],
            'item_groups_id' => ['string', 'required'],
            'item_categories_id' => ['string', 'required']
        ];
    }
}
