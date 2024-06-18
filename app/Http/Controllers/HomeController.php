<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Video;
use App\Models\Audiens;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all()->groupBy('category');
        
        // Get the authenticated user
        $user = Auth::user();
        
        // Fetch the corresponding Audiens record for the authenticated user
        $audiens = Audiens::where('id', $user->id)->first();

        // Set a default profile image
        $profileImage = 'https://via.placeholder.com/100';
        
        // If an Audiens record exists and it has a profile picture, use it
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }

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
        return view('home', [
            'profileImage' => $profileImage,
            'courses' => $videos
        ]);
    }
}
