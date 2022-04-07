<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Carbon;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'alpha_dash', 'string', 'max:255'],
            'mail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'username' => $input['username'],
            'mail' => $input['mail'],
            'password' => Hash::make($input['password']),
            'credits' => 1000,
            'look' => 'hd-180-1.ch-255-66.lg-280-110.sh-305-62.ha-1012-110.hr-828-61',
            'motto' => 'Im New here.',
            'account_day_of_birth' => Carbon::now()->timestamp,
            'account_created' => Carbon::now()->timestamp,
            'gender' => 'M',
            'last_login' => Carbon::now()->timestamp,
            'ip_register' => request()->ip(),
            'ip_current' => request()->ip(),
        ]);
    }
}
