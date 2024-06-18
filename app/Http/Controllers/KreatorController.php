<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
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
        $kreator = Kreator::where('username', $user->name)->first();

        // Set a default profile image
        $profileImage = 'https://via.placeholder.com/100';
        
        // If a Kreator record exists and it has a profile picture, use it
        if ($kreator && $kreator->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($kreator->profilePict);
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
    public function kreatorForum()
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
                'link' => 'httpshttps://chat.whatsapp.com/HP15qezfnqiKxYcmUF6V8s'
            ],
        ];
        $user = Auth::user();
        $kreator = Audiens::where('username', $user->name)->first();
        $profileImage = 'https://via.placeholder.com/100';
        if ($kreator && $kreator->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($kreator->profilePict);
        }

        return view('kreator-forum', compact('forums', 'profileImage'));
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
}
