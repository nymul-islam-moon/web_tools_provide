<?php

namespace App\Http\Requests\Rdps;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRdpsRequest extends FormRequest
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
            'name' => 'required',
            'rams' => 'required',
            'os' => 'required',
            'source' => 'required',
            'access' => 'required',
            'guranteed' => 'required',
            'password' => 'required',
            'username' => 'required'
        ];
    }
}
