<?php

namespace App\Http\Requests\LufixService;

use Illuminate\Foundation\Http\FormRequest;

class CreateLufixServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'selling_type' => 'required',
            'price_type' => 'required',
            'duration' => 'required',
            'proof' => 'required',
            'description' => ['sometimes', 'nullable', 'string'], // this field is required when it has some value otherwise it is ignored
        ];
    }
}
