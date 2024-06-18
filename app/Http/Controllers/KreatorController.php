<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Hash;
use App\Models\Kreator;
use App\Models\Video;
use App\Models\Audiens;

class KreatorController extends Controller
{    
    public function showKreatorPage()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (!$user) {
            // Redirect to the login page if not authenticated
            return redirect()->route('login');
        }
        
        // Fetch the corresponding Kreator record for the authenticated user
        $audiens = Audiens::where('username', $user->name)->first();

        // Set a default profile image
        $profileImage = 'https://via.placeholder.com/100';
        
        // If a Kreator record exists and it has a profile picture, use it
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }

        // Fetch the videos related to the kreator
        $videos = Video::where('idKreator', $user->id)->get()->groupBy('category');

        // Encode videoThumbnail as base64 and clean up video prices
        foreach ($videos as $category => $categoryVideos) {
            foreach ($categoryVideos as $video) {
                // Strip "Rp" and commas from the price and convert to float
                $cleanPrice = str_replace(['Rp', '.'], '', $video->videoPrice);
                $video->cleanPrice = floatval($cleanPrice);

                // Encode the video thumbnail as base64
                $video->thumbnail_base64 = base64_encode($video->videoThumbnail);
            }
        }

        // Return the view with the profile image and courses
        return view('kreator-home', [
            'profileImage' => $profileImage,
            'courses' => $videos
        ]);
    }
    public function index()
    {
        $forums = [
            [
                'name' => 'Design',
                'image' => 'assets/images/Design.jpg',
                'link' => 'https://chat.whatsapp.com/CGqXR30pKh2HbYmCJfV0Om'
            ],
            [
                'name' => 'Business',
                'image' => 'assets/images/Business.png',
                'link' => 'https://chat.whatsapp.com/InVMgffSDAy75EUvRyVl18'
            ],
            [
                'name' => 'Personal Development',
                'image' => 'assets/images/Personal Development.jpg',
                'link' => 'https://chat.whatsapp.com/H8UZQcg7xcXJcjbSQz2K2j'
            ],
            [
                'name' => '3D and Animation',
                'image' => 'assets/images/3D.jpg',
                'link' => 'https://chat.whatsapp.com/G3he87Tu1nI7GT9t0ddMMv'
            ],
            [
                'name' => 'Finance & Accounting',
                'image' => 'assets/images/Finance.jpg',
                'link' => 'https://chat.whatsapp.com/HV2UmmouNYE4iL1lzfy2ip'
            ],
            [
                'name' => 'Marketing',
                'image' => 'assets/images/Marketing.jpg',
                'link' => 'https://chat.whatsapp.com/I1HOKZxNonW8VzLpph6tHf'
            ],
            [
                'name' => 'Lifestyle',
                'image' => 'assets/images/Lifestyle.jpg',
                'link' => 'https://chat.whatsapp.com/CM0kihPeEtl06kb62HXe9S'
            ],
            [
                'name' => 'Health & Fitness',
                'image' => 'assets/images/Fitness.jpg',
                'link' => 'https://chat.whatsapp.com/LqulRRfa6Dh4ZAo2r7y2DN'
            ],
            [
                'name' => 'Development',
                'image' => 'assets/images/Development.jpg',
                'link' => 'https://chat.whatsapp.com/KX0Yuw0WaBG1UGQ5MGaQOM'
            ],
            [
                'name' => 'IT & Software',
                'image' => 'assets/images/Software.jpg',
                'link' => 'https://chat.whatsapp.com/HP15qezfnqiKxYcmUF6V8s'
            ],
        ];
        $user = Auth::user();
        $audiens = Audiens::where('username', $user->name)->first();
        $profileImage = 'https://via.placeholder.com/100';
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }

        return view('kreatorForum', compact('forums', 'profileImage'));
    }
    public function kreatorProfile()
    {
        $user = Auth::user();
        $audiens = Audiens::where('username', $user->name)->first();
        $profileImage = 'https://via.placeholder.com/100';
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }

        return view('kreator-profile', compact('user', 'profileImage'));
    }

    public function create()
    {
        return view('kreator-create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'harga' => 'required|numeric',
            'thumbnail' => 'required|image',
            'video_link' => 'required|url',
            'videoDuration' => 'required|string',
            'category' => 'required|string|in:Design,Business,Personal Development,3D and Animation,Finance & Accounting,Marketing,Lifestyle,Health & Fitness,Development,IT & Software',
        ]);

        // Get the logged-in user's idKreator
        $idKreator = Auth::user()->kreator->id;

        // Handle file upload for thumbnail
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

        // Create a new Video record
        
        $video = new Video();
        $video->idKreator = $idKreator;
        $video->videoTitle = $request->title;
        $video->videoDescription = $request->description;
        $video->videoPrice = $request->harga;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailContent = file_get_contents($thumbnail->getRealPath());
            $video->videoThumbnail = $thumbnailContent;
        }
        $video->video = $request->video_link;
        $video->videoDuration = $request->videoDuration;
        $video->category = $request->category;
        $video->save();

        // Optionally, redirect back to the home page or wherever you need
        return redirect()->route('kreator.home')->with('success', 'Video uploaded successfully!');
    }
    public function edit()
    {
        return view('kreator-edit', ['user' => Auth::user()]);
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
    
        return redirect()->route('kreator.profile')->with('status', 'Profile and related records updated!');
    }
    public function showChangePasswordForm()
    {
        return view('kreator-change-password');
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
            return redirect()->route('kreator.profile')->with('status', 'Password changed!');   
        }else{
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
            }
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return redirect()->route('kreator.profile')->with('status', 'Password changed!');
        }
        
        return back()->withErrors(['current_password' => 'Current password is incorrect']);
        
    }
}
