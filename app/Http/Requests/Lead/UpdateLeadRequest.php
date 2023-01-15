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
            'download_link' => 'required',
            'number' => 'required',
            'type' => 'required',
            'provider' => 'required',
            'description' => 'required',
            'proof' => 'required',
            'country' => 'required',
            'price' => 'required',
        ];
    }
}
