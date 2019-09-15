<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Division;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/edit';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
    * Soilder: We need index surgent do you here me!
    * Surgent: Go create your own index lazy fat ass!
    */

    public function showRegistrationForm()
    {
      $divisions = Division::all();
      return view('auth.register', compact('divisions'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
            'blood_group'      => ['required', 'string'],
            'division'         => ['required', 'string'],
            'district'         => ['required', 'string'],
            'upazila'          => ['required', 'string'],
            'mobile'           => ['required', 'min:11', 'max:14'],
            'last_donate_date' => ['nullable'],
            'isAdmin'          => ['nullable'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'             => $data['name'],
            'email'            => $data['email'],
            'password'         => Hash::make($data['password']),
            'blood_group'      => $data['blood_group'],
            'mobile'           => $data['mobile'],
            'division'         => $data['division'],
            'district'         => $data['district'],
            'upazila'          => $data['upazila'],
            'last_donate_date' => null,
            'isAdmin'          => null,
        ]);
    }
}
