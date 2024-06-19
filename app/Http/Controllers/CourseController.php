<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Transaksi;
use App\Models\Audiens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function redirectToPayment(Request $request, $courseTitle)
    {
        return redirect()->route('payment', ['course' => $courseTitle]);
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

    public function pay(Request $request, $videoTitle)
    {
        $audiens = Auth::user();
        
        // Check if audiens exists
        if (!$audiens) {
            return redirect()->back()->with('error', 'Audiens not found.');
        }

        $video = Video::where('videoTitle', $videoTitle)->first();

        // Check if video exists
        if (!$video) {
            return redirect()->back()->with('error', 'Video not found.');
        }

        $status = 1; // Assuming 1 means 'paid'

        $transaksi = Transaksi::create([
            'idKreator' => $video->idKreator,
            'idAudiens' => $audiens->id,
            'videoTitle' => $video->videoTitle,
            'videoPrice' => $video->videoPrice,
            'tglTransaksi' => now()->toDateString(),
            'status' => $status,
        ]);

        return redirect()->route('success', ['course' => $videoTitle]);
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
