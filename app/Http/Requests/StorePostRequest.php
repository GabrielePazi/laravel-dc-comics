<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:1|max:100|string',
            'description' => 'required|min:1|string',
            'thumb' => 'required|url',
            'price' => 'required',
            'sale_date' => 'required|date',
            'series' => 'nullable|string',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ];
    }
}
