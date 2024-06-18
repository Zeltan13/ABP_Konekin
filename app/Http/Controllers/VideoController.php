<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Response;

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
}
