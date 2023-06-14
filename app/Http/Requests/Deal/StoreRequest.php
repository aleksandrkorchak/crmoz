<?php

namespace App\Http\Requests\Deal;

use App\Rules\AccountID;
use App\Rules\DealStageID;
use App\Services\Account\Account;
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
            'deal_name' => 'required|string',
            'deal_closing_date' => 'required|date',
            'deal_stage_id' => ['required', new DealStageID],
            'deal_account_id' => ['required', new AccountID]
        ];
    }
}
