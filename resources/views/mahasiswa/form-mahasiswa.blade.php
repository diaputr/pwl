@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student Form</li>
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
                            {!! isset($mhs) ? method_field('PUT') : '' !!}

                            <div class="form-group">
                                <label>NIM</label>
                                <input class="form-control @error('nim') is-invalid @enderror"
                                    value="{{ isset($mhs) ? $mhs->nim : old('nim') }} " name="nim" type="text">
                                @error('nim')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ isset($mhs) ? $mhs->nama : old('nama') }} " name="nama" type="text">
                                @error('nama')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" value="L"
                                        {{ isset($mhs) && $mhs->jk == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" value="P"
                                        {{ isset($mhs) && $mhs->jk == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                                @error('jk')
                                    <div class="error invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <label>Tempat, Tanggal Lahir</label>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{ isset($mhs) ? $mhs->tempat_lahir : old('tempat_lahir') }}"
                                        name="tempat_lahir" type="text">
                                    @error('tempat_lahir')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control @error('tgl_lahir') is-invalid @enderror"
                                        value="{{ isset($mhs) ? $mhs->tgl_lahir : old('tgl_lahir') }}" name="tgl_lahir"
                                        type="date">
                                    @error('tgl_lahir')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ isset($mhs) ? $mhs->alamat : old('alamat') }} " name="alamat"
                                    type="text">
                                @error('alamat')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>HP</label>
                                <input class="form-control @error('hp') is-invalid @enderror"
                                    value="{{ isset($mhs) ? $mhs->hp : old('hp') }} " name="hp" type="text">
                                @error('hp')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-md btn-primary my-2 float-right" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
