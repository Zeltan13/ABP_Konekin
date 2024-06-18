<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Audiens;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $audiens = Audiens::where('username', $user->name)->first();
        
        $profileImage = 'https://via.placeholder.com/100'; // Default profile picture
        
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }
        
        return view('profile', compact('profileImage'));
    }

    public function edit()
    {
        return view('edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = Auth::user();
        // Update the corresponding record in the 'audiens' table
        $audiens = Audiens::where('username', $user->name)->first();
        
        if ($audiens) {
            // If 'audiens' record exists for the user, update its attributes
            $audiens->username = $request->input('name');
            // Update other fields of 'audiens' if needed
            $audiens->save();
        } else {
            // If 'audiens' record doesn't exist, create a new one
            $audiens = new Audiens();   
            $audiens->username = $request->input('name');
            // Set other fields of 'audiens' if needed
            $audiens->save();
        }
        // Update the user's name
        $user->name = $request->input('name');

        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureContent = file_get_contents($profilePicture->getRealPath());
            $audiens->profilePict = $profilePictureContent;
        }
        // Update other fields of the user if needed
        $user->save();
        $audiens->save();
    
        return redirect()->route('profile')->with('status', 'Profile and related records updated!');
    }
    
    public function showChangePasswordForm()
    {
        return view('change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        $isPlainTextPassword = !preg_match('/^\$2[ayb]\$.{56}$/', $user->password);
        if ($isPlainTextPassword) {
            if ($request->current_password !== $user->password) {
                return redirect()->back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
            }
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return redirect()->route('profile')->with('status', 'Password changed!');   
        }else{
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
            }
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return redirect()->route('profile')->with('status', 'Password changed!');
        }
        
        return back()->withErrors(['current_password' => 'Current password is incorrect']);
        
    }
}
