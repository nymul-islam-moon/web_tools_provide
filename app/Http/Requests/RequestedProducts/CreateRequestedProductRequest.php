<?php


namespace App\Http\Requests\RequestedProducts;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequestedProductRequest extends FormRequest
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
            'name' => 'required',
            'message' => 'required',
        ];
    }
}
