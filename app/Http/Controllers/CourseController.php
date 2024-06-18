<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showDescription($courseTitle)
    {
        $course = Video::where('videoTitle', $courseTitle)->first();
        $thumbnailBase64 = base64_encode($course->videoThumbnail);
        $cleanPrice = preg_replace('/[^\d]/', '', $course->videoPrice);
        $formattedPrice = number_format($cleanPrice, 0, ',', '.');

        return view('course-description', [
            'course' => $course,
            'thumbnail_base64' => $thumbnailBase64,
            'formattedPrice' => $formattedPrice
        ]);
    }

    public function redirectToPayment(Request $request, $course)
    {
        return redirect()->route('payment', ['course' => $course]);
    }

    public function payment($courseTitle)
    {
        $course = Video::where('videoTitle', $courseTitle)->firstOrFail();
        $cleanPrice = preg_replace('/[^\d]/', '', $course->videoPrice);
        $formattedPrice = number_format($cleanPrice, 0, ',', '.');

        return view('payment', [
            'course' => $course,
            'formattedPrice' => $formattedPrice
        ]);
    }

    public function pay(Request $request, $courseTitle)
    {
        return redirect()->route('success', ['course' => $courseTitle]);
    }

    public function success($courseTitle)
    {
        $course = Video::where('videoTitle', $courseTitle)->firstOrFail();
        return view('success', compact('course'));
    }

    public function watch($courseTitle)
    {
        // Fetch the course details from the database using the course title
        $course = Video::where('videoTitle', $courseTitle)->first();

        // Check if the course exists
        if (!$course) {
            abort(404, 'Course not found');
        }

        // Extract the video ID from the YouTube URL
        $youtubeUrl = $course->video;
        $videoId = $this->extractYoutubeId($youtubeUrl);

        // Construct the embed URL
        $videoUrl = "https://www.youtube.com/embed/" . $videoId;

        return view('watch', compact('course', 'videoUrl'));
    }

    private function extractYoutubeId($url)
    {
        // Extract the video ID from a YouTube URL
        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $url, $matches)) {
            return $matches[1];
        }

        return null;
    }


}
