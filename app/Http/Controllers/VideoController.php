<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
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
}
