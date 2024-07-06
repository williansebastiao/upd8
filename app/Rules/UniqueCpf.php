<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueCpf implements ValidationRule
{

    /**
     * @param string $attribute
     * @param mixed $value
     * @param Closure $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $cleanedCpf = preg_replace('/[^0-9]/', '', $value);

        $count = \DB::table('customers')->where('cpf', $cleanedCpf)->count();
        if ($count > 0) {
            $fail("The CPF is already in use.");
        }
    }
}
