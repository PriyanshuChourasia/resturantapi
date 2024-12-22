<?php

namespace App\Http\Requests\ItemUnit;

use Illuminate\Foundation\Http\FormRequest;

class ItemUnitUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:item_units,name,' . $this->item_unit->id],
            'alias' => ['nullable', 'string']
        ];
    }
}
