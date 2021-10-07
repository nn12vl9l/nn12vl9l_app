<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipiRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'meterial' => 'required|string|max:2000',
            'seasoning' => 'required|string|max:2000',
            'recipi' => 'required|string|max:2000',
            'comment' => 'required|string|max:2000',
        ];
    }
}
