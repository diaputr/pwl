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
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = ProdiModel::all();
        $kelas = KelasModel::all();
        return view('mahasiswa.mahasiswa', ['prodi' => $prodi, 'kelas' => $kelas]);
    }

    public function data()
    {
        $data = MahasiswaModel::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
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
        $rule = [
            'nim' => 'required|string|unique:mahasiswas,nim',
            'nama' => 'required|string',
            'jk' => 'required',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = new MahasiswaModel($request->except('image'));
        $mhs->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->store('images', 'public');
            $mhs->foto = $image_name;
            $mhs->save();
        }

        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
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

    public function update(Request $request, $id)
    {
        $rule = [
            'nim' => ['required', 'string', 'max:10', Rule::unique('mahasiswas', 'nim')->ignore($id, 'id')],
            'nama' => 'required|string',
            'jk' => 'required',
            'id_kelas' => 'required',
            'id_prodi' => 'required',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs) ? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
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
