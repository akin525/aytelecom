<?php

namespace App\Actions\Fortify;

use App\Mail\Emailotp;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use RealRashid\SweetAlert\Facades\Alert;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:11', 'min:11'],
            'address' => ['required', 'string',  'min:11'],
            'gender' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'username' => ['required', 'string',  'min:6', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {

            $receiver=$input ['email'];
            $admin= 'info@aytelecom.com.ng';
            Mail::to($receiver)->send(new Emailotp($input));
            Mail::to($admin)->send(new Emailotp($input));
            return tap(User::create([
                'name' => $input['name'],
                'username'=>$input['username'],
                'phone'=>$input['number'],
                'address'=>$input['address'],
                'gender'=>$input['gender'],
                'dob'=>$input['dob'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
