<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($n)
    {
        return view('news', ['news' => $n]);
    }
}
