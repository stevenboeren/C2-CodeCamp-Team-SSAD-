<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lyric;

class LyricsController extends Controller
{
    public function index()
    {
        $lyrics = Lyric::all();
        return view('lyrics.index')
            ->with('lyrics', $lyrics);
    }

    public function show(Lyric $lyrics)
    {
        return view('lyrics.show')
            ->with(compact('lyrics'));
    }
}