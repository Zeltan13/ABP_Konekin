<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all()->groupBy('category');
        
        // Encode the videoThumbnail as base64
        foreach ($videos as $category => $categoryVideos) {
            foreach ($categoryVideos as $video) {
                // Strip the "Rp" and commas from the price and convert to float
                $cleanPrice = str_replace(['Rp', '.'], '', $video->videoPrice);
                $video->cleanPrice = floatval($cleanPrice);
                $video->thumbnail_base64 = base64_encode($video->videoThumbnail);
            }
        }

        return view('home', ['courses' => $videos]);
    }
}
