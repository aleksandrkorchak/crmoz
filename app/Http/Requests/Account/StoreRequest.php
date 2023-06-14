<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'account_name' => 'required|string',
            'account_website' => 'required|regex:/^((https?:\/\/)?([w]{3}[\.])?)?[a-zA-Z0-9\-_]{1,}[\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2,6})?$/',
            'account_phone' => 'required|regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/'
        ];
    }
}
