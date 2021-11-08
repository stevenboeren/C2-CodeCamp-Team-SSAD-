<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saw;

class SawsController extends Controller
{
    public function index()
    {
        $saws = Saw::all();
        return view('saws.index')
            ->with('saws', $saws);
    }

    public function show(Saw $saw)
    {
        return view('saws.show')
            ->with(compact('saw'));
    }
}
