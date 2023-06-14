<?php

namespace App\Rules;

use App\Services\Deal\Deal;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DealStageID implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $deal = new Deal();
        $stages = $deal->getFullStagesList()['pick_list_values'];
        $ids = array_column($stages, 'id');

        if (!in_array($value, $ids)) {
            $fail('The :attribute is not valid.');
        }

    }
}
