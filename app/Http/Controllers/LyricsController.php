<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LyricsController extends Controller
{
    public function index()
    {
        return view('lyrics/index');
    }
}
