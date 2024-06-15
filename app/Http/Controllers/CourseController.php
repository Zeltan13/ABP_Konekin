<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function buy(Request $request) {
        $course = $request->course;
        return redirect()->route('payment', ['course' => $course]);
    }

    public function payment($course) {
        return view('payment', compact('course'));
    }

    public function pay(Request $request, $course) {
        // Handle the payment logic here

        // For simplicity, redirect to success page
        return redirect()->route('success', ['course' => $course]);
    }

    public function success($course) {
        return view('success', compact('course'));
    }

    public function watch($course) {
        // Check if the user has paid for the course
        // For now, we'll assume they have paid

        $videoUrl = "https://youtu.be/JZoNUOClHo0"; // Replace with actual logic to get the video URL
        return view('watch', compact('course', 'videoUrl'));
    }
}
