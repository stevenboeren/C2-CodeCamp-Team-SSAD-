<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinksController extends Controller
{
    public function index()
    {
        return view('drinks.index');
    }

    public function hotdrinksindex()
    {
        $drinks = Drink::where('hot', '=', 1)->get();
        return view('drinks/hotdrinks/index')
                    ->with('drinks', $drinks);
    }

    public function sodaindex()
    {
        $drinks = Drink::where('hot', '=', 0)->get();
        return view('drinks/soda/index')
                    ->with('drinks', $drinks);
    }
}
