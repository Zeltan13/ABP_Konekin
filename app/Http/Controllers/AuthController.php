<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->with('error', 'Email atau Password salah');
        }
        $isPlainTextPassword = !preg_match('/^\$2[ayb]\$.{56}$/', $user->password);
        if ($isPlainTextPassword){
            if ($password === $user->password) {
                Auth::login($user);
                return redirect('/home')->with('success', 'Login Berhasil');
            }
        } else {
            if (Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect('/home')->with('success', 'Login Berhasil');
            }
        }
        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}


// public function loginPost(Request $request)
    // {
    //     $nip = $request->nip;
    //     $password = $request->password;
        
    //     // Retrieve the user by NIP
    //     $user = Pegawai::where('nip', $nip)->first();
        
    //     if (!$user) {
    //         return back()->with('error', 'NIP atau Password salah');
    //     }
    //     $isPlainTextPassword = !preg_match('/^\$2[ayb]\$.{56}$/', $user->password);

    //     // Check if the provided password matches the stored hashed password
    //     if ($isPlainTextPassword){
    //         if($password ===$user->password){
    //             Auth::login($user);
    //             $userId = $user->id;
    
    //             Session::put('userId', $userId);

    //             $role = $user->roleId;
    //             Session::put('role', $role);
    //             if ($role == 2) {
    //                 return redirect('/home')->with('success', 'Login Berhasil');
    //             } else {
    //                 return redirect('/admin')->with('success', 'Login Berhasil');
    //             }
    //         }  
    //     } else {
    //         if (Hash::check($password, $user->password)) {
    //             // If the passwords match, log in the user
    //             Auth::login($user);
    //             $userId = $user->id;
    
    //             Session::put('userId', $userId);
    
    //             $role = $user->roleId;
    //             Session::put('role', $role);
    //             if ($role == 1) {
    //                 return redirect('/admin')->with('success', 'Login Berhasil');
    //             } else {
    //                 return redirect('/home')->with('success', 'Login Berhasil');
    //             }
    //         }
    //     }
    //     // If the passwords don't match, redirect back with an error message
    //     return back()->with('error', 'NIP atau Password salah');
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     Session::flush();
    //     return redirect('/')->with('success', 'Logout Berhasil');
    // }
