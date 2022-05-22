<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'required|string',
            'announc'      => 'required|string',
            'desc'         => 'required',
            'published_at' => 'required|date',
            'category_id'  => 'required|exists:authors,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Не вижу поля :attribute :('
        ];
    }
}
