<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        $hobi = HobiModel::all();
        return view('task.hobi', ['hobi' => $hobi]);
    }

    public function create()
    {
        return view('task.form-hobi', ['urlform' => url('/hobi')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'kategori' => 'required|string|max:20',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
            'deskripsi' => 'required|string|max:100'
        ]);

        HobiModel::create($request->except(['_token']));
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('task.form-hobi', ['urlform' => url("/hobi/" . $id), 'hobi' => $hobi]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'kategori' => 'required|string|max:20',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
            'deskripsi' => 'required|string|max:100'
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['hobi_id'] = $id;

        $data = HobiModel::where('hobi_id', '=', $id)->update($requestData);
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['hobi_id'] = $id;

        HobiModel::where('hobi_id', '=', $id)->delete();
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Dihapus');
    }
}
