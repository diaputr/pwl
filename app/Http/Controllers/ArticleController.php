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

    public function create()
    {
        return view('form-article', ['urlform' => url('/artikel')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'penulis' => 'required|string|max:35',
            'kategori' => 'required|in:Hobi,Politik,Keseharian',
            'tgl_publish' => 'required|date'
        ]);

        ArtikelModel::create($request->except(['_token']));
        return redirect('/artikel')
            ->with('success', 'Artikel Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $art = ArtikelModel::find($id);
        return view('form-article', ['urlform' => url("/artikel/" . $id), 'art' => $art]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'penulis' => 'required|string|max:35',
            'kategori' => 'required|in:Hobi,Politik,Keseharian',
            'tgl_publish' => 'required|date'
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['artikel_id'] = $id;

        $data = ArtikelModel::where('artikel_id', '=', $id)->update($requestData);
        return redirect('/artikel')
            ->with('success', 'Artikel Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['artikel_id'] = $id;

        ArtikelModel::where('artikel_id', '=', $id)->delete();
        return redirect('/artikel')
            ->with('success', 'Artikel Berhasil Dihapus');
    }
}
