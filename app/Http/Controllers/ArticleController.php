<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $art = ArtikelModel::all();
        return view('article', ['art' => $art]);
    }
}
