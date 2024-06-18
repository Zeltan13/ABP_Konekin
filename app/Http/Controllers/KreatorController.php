<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Kreator;
use App\Models\Video;

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
}
