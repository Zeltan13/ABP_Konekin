<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread; // Assuming you have a Thread model

class ForumController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->get(); // Get latest threads
        return view('forum', compact('threads'));
    }
}
