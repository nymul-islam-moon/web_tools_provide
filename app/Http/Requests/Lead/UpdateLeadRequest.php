<?php

namespace App\Http\Requests\Lead;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadRequest extends FormRequest
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
            'price' => 'required',
            'country' => 'required',
            'proof' => 'required',
            'provider' => 'required',
            'type' => 'required',
            'phone_number' => 'required',
            'download_link' => 'required',
            'description' => ['sometimes', 'nullable', 'string'], // this field is required when it has some value otherwise it is ignored
            'additional_information' => ['sometimes', 'nullable', 'string'], // this field is required when it has some value otherwise it is ignored
        ];
    }
}
