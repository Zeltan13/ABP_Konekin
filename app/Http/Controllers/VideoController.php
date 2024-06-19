<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Transaksi;
use App\Models\Audiens;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth; 

class VideoController extends Controller
{
    public function thumbnail($id)
    {
        $video = Video::findOrFail($id);
        $thumbnail = $video->videoThumbnail;

        return Response::make($thumbnail, 200, [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline; filename="thumbnail.jpg"'
        ]);
    }
    public function showUploadForm()
    {
        return view('video-upload');
    }
    public function upload(Request $request)
    {
        // Handle the video upload logic here
    }
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $salesCount = Transaksi::where('videoTitle', $video->videoTitle)->count();

        return view('edit-video', compact('video', 'salesCount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'videoTitle' => 'required|string|max:128',
            'videoDescription' => 'required|string|max:500',
            'videoPrice' => 'required|string|max:50',
        ]);
        
        $video = Video::findOrFail($id);
        $video->videoTitle = $request->videoTitle;
        $video->videoDescription = $request->videoDescription;
        $video->videoPrice = $request->videoPrice;
        $video->save();

        return redirect()->route('kreator.home')->with('success', 'Video updated successfully!');
    }
    public function purchased()
    {
        // Get the authenticated user
        $user = Auth::user();
        
        // Fetch the corresponding Audiens record for the authenticated user
        $audiens = Audiens::where('username', $user->name)->first();
        
        // If the audiens record is not found, handle the error accordingly (you might want to redirect or show an error message)
        if (!$audiens) {
            return redirect()->route('home')->with('error', 'Audiens record not found.');
        }
        
        // Get the user's ID from the audiens record
        $userId = $audiens->id;
        
        // Fetch the titles of videos purchased by the user
        $purchasedVideoTitles = Transaksi::where('idAudiens', $userId)->where('status', 1)->pluck('videoTitle')->toArray();
        
        // Fetch the details of the purchased videos
        $purchasedVideos = Video::whereIn('videoTitle', $purchasedVideoTitles)->get();

        // Encode videoThumbnail as base64 for purchased videos
        foreach ($purchasedVideos as $video) {
            $video->thumbnail_base64 = base64_encode($video->videoThumbnail);
        }

        // Return the view with the purchased videos
        return view('purchased', compact('purchasedVideos'));
    }

}
