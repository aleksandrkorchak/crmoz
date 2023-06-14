<?php

namespace App\Rules;

use App\Services\Account\Account;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AccountID implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $accounts = new Account;
        $data = $accounts->all()['data'];
        $ids = array_column($data, 'id');

        if (!in_array($value, $ids)) {
            $fail('The :attribute is not valid.');
        }
    }
}
