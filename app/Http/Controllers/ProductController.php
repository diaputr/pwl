<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Category";
    }

    public function games()
    {
        return "Educational Games";
    }

    public function books()
    {
        return "Story Books";
    }

    public function songs()
    {
        return "Kid Songs";
    }
}
