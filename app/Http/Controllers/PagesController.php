<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class PagesController extends Controller
{
    public function index()
    {
        $quote = Quote::inRandomOrder()->first();

        return view('pages.index')->with('quote', $quote);
    }

    public function about()
    {
        return view('pages.about');
    }
}
