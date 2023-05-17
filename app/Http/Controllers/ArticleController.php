<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class ArticleController extends Controller
{
    public function index()
    {
        $art = ArtikelModel::paginate(3)->withQueryString();
        return view('article', ['art' => $art]);
    }

    public function create()
    {
        return view('form-article', ['urlform' => url('/artikel')]);
    }

    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        ArtikelModel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'tgl_publish' => $request->tgl_publish,
            'image' => $image_name,
            $request->except(['_token'])
        ]);

        return redirect('/artikel')->with('success', 'Artikel Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $art = ArtikelModel::find($id);
        return view('form-article', ['urlform' => url("/artikel/" . $id), 'art' => $art]);
    }

    public function update(Request $request, $id)
    {
        $art = ArtikelModel::find($id);

        $art->judul = $request->judul;
        $art->penulis = $request->penulis;
        $art->kategori = $request->kategori;
        $art->tgl_publish = $request->tgl_publish;

        if ($request->hasFile('image')) {
            if ($art->image && Storage::exists('public/' . $art->image)) {
                Storage::delete('public/' . $art->image);
            }

            $image_name = $request->file('image')->store('images', 'public');
            $art->image = $image_name;
        }

        $art->save();

        return redirect('/artikel')->with('success', 'Artikel Berhasil Diedit');
    }


    public function destroy($id)
    {
        $requestData['artikel_id'] = $id;

        ArtikelModel::where('artikel_id', '=', $id)->delete();
        return redirect('/artikel')->with('success', 'Artikel Berhasil Dihapus');
    }

    public function cetak_pdf()
    {
        $art = ArtikelModel::all();
        $pdf = PDF::loadview('article-pdf', ['art' => $art]);
        return $pdf->stream();
    }
}
