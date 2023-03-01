<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($name = '')
    {
        return view('profile', ['name' => $name]);
    }
}
