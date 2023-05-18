<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use App\Models\KelasModel;
use App\Models\MhsMatkulModel;
use App\Models\ProdiModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::Paginate(3)->withQueryString();
        return view('mahasiswa.mahasiswa', ['mhs' => $mhs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.form-mahasiswa', [
            'urlform' => url('/mahasiswa'),
            'kls' => KelasModel::all(), 'prodi' => ProdiModel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'id_prodi' => $request->id_prodi,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'foto' => $image_name,
        ]);

        return redirect('/mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = MahasiswaModel::with('kls')->find($id);
        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }

    public function khs($id)
    {
        $mhs = MahasiswaModel::with('matkul')->find($id);
        return view('mahasiswa.khs', ['mhs' => $mhs]);
    }

    public function cetak_pdf($id)
    {
        $mhs = MahasiswaModel::with('matkul')->find($id);
        $pdf = PDF::loadview('mahasiswa.khs-pdf', ['mhs' => $mhs]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = MahasiswaModel::find($id);
        return view('mahasiswa.form-mahasiswa', [
            'urlform' => url("/mahasiswa/" . $id),
            'mhs' => $mhs, 'kls' => KelasModel::all(), 'prodi' => ProdiModel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $mhs = MahasiswaModel::find($id);

        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->id_kelas = $request->id_kelas;
        $mhs->id_prodi = $request->id_prodi;
        $mhs->jk = $request->jk;
        $mhs->tempat_lahir = $request->tempat_lahir;
        $mhs->tgl_lahir = $request->tgl_lahir;
        $mhs->alamat = $request->alamat;
        $mhs->hp = $request->hp;

        if ($request->hasFile('image')) {
            if ($mhs->foto && Storage::exists('public/' . $mhs->foto)) {
                Storage::delete('public/' . $mhs->foto);
            }

            $image_name = $request->file('image')->store('images', 'public');
            $mhs->foto = $image_name;
        }

        $mhs->save();

        return redirect('/mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
