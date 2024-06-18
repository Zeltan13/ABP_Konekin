<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        // Fetching videos and grouping by categories
        $videos = Video::all()->groupBy('category');

        $courses = [];
        foreach ($videos as $category => $categoryVideos) {
            $courses[$category] = $categoryVideos->map(function ($video) {
                return [
                    'title' => $video->videoTitle,
                    'price' => $video->videoPrice,
                    'image' => $video->videoThumbnail, // Assuming this stores the image path
                ];
            });
        }

        return view('home', compact('courses'));
    }
}
