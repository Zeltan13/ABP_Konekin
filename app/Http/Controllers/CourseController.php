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
        // Get the audience's username
        $username = Auth::user()->name;
        $idAudiens = $this->getIdAudiens($username);

        // Check if the user has already paid for the course
        if ($this->hasPaid($idAudiens, $courseTitle)) {
            return redirect()->route('watch', ['course' => $courseTitle]);
        }

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

    public function pay(Request $request, $course)
    {
        $username = $request->input('username');
        $idAudiens = $this->getIdAudiens($username);

        if (is_null($idAudiens)) {
            return back()->withErrors(['username' => 'Invalid username']);
        }

        $video = Video::where('videoTitle', $course)->first();
        if (!$video) {
            return back()->withErrors(['course' => 'Course not found']);
        }

        Transaksi::create([
            'idKreator' => $video->idKreator,
            'idAudiens' => $idAudiens,
            'videoTitle' => $video->videoTitle,
            'videoPrice' => $video->videoPrice,
            'tglTransaksi' => now()->format('Y-m-d'),
            'status' => $request->input('have_paid') === 'on' ? 1 : 0,
        ]);

        return redirect()->route('success', ['course' => $course])->with('success', 'Payment successful');
    }

    public function success($courseTitle)
    {
        $course = Video::where('videoTitle', $courseTitle)->firstOrFail();
        return view('success', compact('course'));
    }

    public function watch($courseTitle)
    {
        $course = Video::where('videoTitle', $courseTitle)->first();

        if (!$course) {
            abort(404, 'Course not found');
        }

        $youtubeUrl = $course->video;
        $videoId = $this->extractYoutubeId($youtubeUrl);
        $videoUrl = "https://www.youtube.com/embed/" . $videoId;

        return view('watch', compact('course', 'videoUrl'));
    }

    private function extractYoutubeId($url)
    {
        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $url, $matches)) {
            return $matches[1];
        }

        return null;
    }

    private function getIdAudiens($username)
    {
        $idAudiens = null;

        if ($username === 'Stephano') {
            $idAudiens = 7;
        } elseif ($username === 'Oktovivian') {
            $idAudiens = 1;
        } elseif ($username === 'Fathan Askars') {
            $idAudiens = 4;
        }

        return $idAudiens;
    }

    private function hasPaid($idAudiens, $courseTitle)
    {
        $transaction = Transaksi::where('idAudiens', $idAudiens)
                                ->where('videoTitle', $courseTitle)
                                ->where('status', 1)
                                ->first();

        return $transaction !== null;
    }
}
