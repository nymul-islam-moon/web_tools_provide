<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'account_type' => ['required', 'string'],
            'hits_link' => ['required', 'url'],
            'website' => ['required', 'url'],
            'source' => ['required', 'string'],
            'country' => ['required', 'string'],
            'proof' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'description' => ['sometimes', 'nullable', 'string'], // this field is required when it has some value otherwise it is ignored
        ];
    }
}
