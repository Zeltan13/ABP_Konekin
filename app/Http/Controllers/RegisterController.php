<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Audiens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // Create the user in the users table
        $user = $this->createUser($request->all());

        // Create the corresponding record in the audiens table
        $this->createAudiens($request->all());

        return redirect()->route('login')->with('status', 'Registration successful! Please verify your email.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createAudiens(array $data)
    {
        return Audiens::create([
            'username' => $data['name'],
            'noHP' => $data['phone'],
            'email' => $data['email'],
            // 'profilePict' can be set to a default value or handled elsewhere
        ]);
    }
}
