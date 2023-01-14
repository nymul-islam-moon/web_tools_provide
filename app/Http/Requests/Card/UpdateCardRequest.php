<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCardRequest extends FormRequest
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
            'security_type' => ['required'],
            'card_number' => ['required'],
            'expiration' => ['required'],
            'cvv' => ['required'],
            'available_info' => ['required'],
            'all_info' => ['required'],
            'price' => ['required']
        ];
    }
}
