<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program');
    }

    // public function karir()
    // {
    //     return "Dream Job";
    // }

    // public function magang()
    // {
    //     return "Internship";
    // }

    // public function industri()
    // {
    //     return "Companies";
    // }
}
