<?php

namespace App\Http\Requests\Cpanel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCpanelRequest extends FormRequest
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
            'user_name' => ['required'],
            'password' => ['required'],
            'source' => ['required'],
            'hosting' => ['required'],
            'price' => ['required'],
        ];
    }
}
