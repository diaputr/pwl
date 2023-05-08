@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Course Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="card" style="width: 80%">
                    <div class="card-body ">
                        <form method="POST" action="{{ $urlform }}">
                            @csrf
                            {!! isset($matkul) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Kode</label>
                                <input class="form-control @error('kode') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->kode : old('kode') }} " name="kode"
                                    type="text">
                                @error('kode')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->nama : old('nama') }} " name="nama"
                                    type="text">
                                @error('nama')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label>Dosen</label>
                                <input class="form-control @error('dosen') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->dosen : old('dosen') }} " name="dosen"
                                    type="text">
                                @error('dosen')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label>Semester</label>
                                <input class="form-control @error('semester') is-invalid @enderror"
                                    value="{{ isset($matkul) ? intval($matkul->semester) : old('semester') }}"
                                    name="semester" type="number">
                                @error('semester')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input class="form-control @error('sks') is-invalid @enderror"
                                    value="{{ isset($matkul) ? intval($matkul->sks) : old('sks') }}" name="sks"
                                    type="number">
                                @error('sks')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jam</label>
                                <input class="form-control @error('jam') is-invalid @enderror"
                                    value="{{ isset($matkul) ? intval($matkul->jam) : old('jam') }}" name="jam"
                                    type="number">
                                @error('jam')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label>Hari</label>
                                <select class="form-control @error('hari') is-invalid @enderror" name="hari">
                                    <option value="">-- Pilih Hari --</option>
                                    <option value="Senin"
                                        {{ isset($matkul) && $matkul->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa"
                                        {{ isset($matkul) && $matkul->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu"
                                        {{ isset($matkul) && $matkul->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis"
                                        {{ isset($matkul) && $matkul->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat"
                                        {{ isset($matkul) && $matkul->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                </select>
                                @error('hari')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Ruang</label>
                                <input class="form-control @error('ruang') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->ruang : old('ruang') }} " name="ruang"
                                    type="text">
                                @error('ruang')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            <button class="btn btn-md btn-primary my-2 float-right" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
