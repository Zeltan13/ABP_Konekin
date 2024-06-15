<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses = [
            'Recommended for you' => [
                ['title' => 'Animation Basics in 14 Minutes (6 Big ideas for beginners)', 'price' => 499000, 'image' => 'path_to_image1'],
                ['title' => 'Fakta tentang Produk', 'price' => 149000, 'image' => 'path_to_image2']
            ],
            'Top courses in Science' => [
                ['title' => 'Your Tattoo is INSIDE Your Immune System', 'price' => 799000, 'image' => 'path_to_image3'],
                ['title' => 'The SMALLEST to the LARGEST Thing in the Universe', 'price' => 799000, 'image' => 'path_to_image4']
            ],
            // Add other categories similarly...
        ];

        return view('home', compact('courses'));
    }
}
