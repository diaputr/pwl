<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $keluarga = KeluargaModel::all();
        return view('task.keluarga', ['keluarga' => $keluarga]);
    }

    public function create()
    {
        return view('task.form-keluarga', ['urlform' => url('/keluarga')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:35',
            'jk' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'hubungan' => 'required|string|max:20',
            'pekerjaan' => 'required|string|max:20'
        ]);

        KeluargaModel::create($request->except(['_token']));
        return redirect('/keluarga')
            ->with('success', 'Keluarga Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('task.form-keluarga', ['urlform' => url("/keluarga/" . $id), 'keluarga' => $keluarga]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required|string|max:35',
            'jk' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'hubungan' => 'required|string|max:20',
            'pekerjaan' => 'required|string|max:20'
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['keluarga_id'] = $id;

        $data = keluargaModel::where('keluarga_id', '=', $id)->update($requestData);
        return redirect('/keluarga')
            ->with('success', 'Keluarga Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['keluarga_id'] = $id;

        keluargaModel::where('keluarga_id', '=', $id)->delete();
        return redirect('/keluarga')
            ->with('success', 'keluarga Berhasil Dihapus');
    }
}
