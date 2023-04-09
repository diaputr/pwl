<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = MatkulModel::all();
        return view('task.matkul', ['matkul' => $matkul]);
    }


    public function create()
    {
        return view('task.form-matkul', ['urlform' => url('/matkul')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'dosen' => 'required|string|max:80',
            'sks' => 'required|integer',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat',
            'ruang' => 'required|string|max:10'
        ]);

        MatkulModel::create($request->except(['_token']));
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        return view('task.form-matkul', ['urlform' => url("/matkul/" . $id), 'matkul' => $matkul]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'dosen' => 'required|string|max:80',
            'sks' => 'required|integer',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat',
            'ruang' => 'required|string|max:10'
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['matkul_id'] = $id;

        $data = MatkulModel::where('matkul_id', '=', $id)->update($requestData);
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['matkul_id'] = $id;

        MatkulModel::where('matkul_id', '=', $id)->delete();
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Dihapus');
    }
}
