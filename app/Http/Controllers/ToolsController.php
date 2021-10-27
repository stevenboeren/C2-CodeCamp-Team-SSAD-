<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolsController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index')
            ->with('tools', $tools);
    }

    public function show(Tool $tool)
    {
        return view('tools.show')
            ->with(compact('tool'));
    }
}
