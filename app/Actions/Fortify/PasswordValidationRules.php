<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        $password = new Password(5);

        $password->mixedCase()->letters()->numbers()->symbols();

        return ['required', 'string', $password, 'confirmed'];
    }
}
