@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Family Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Family Form</li>
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
                            {!! isset($keluarga) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->nama : old('nama') }} " name="nama"
                                    type="text">
                                @error('nama')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" value="L"
                                        {{ isset($keluarga) && $keluarga->jk == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" value="P"
                                        {{ isset($keluarga) && $keluarga->jk == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                                @error('jk')
                                    <div class="error invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control @error('tgl_lahir') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->tgl_lahir : old('tgl_lahir') }}"
                                    name="tgl_lahir" type="date">
                                @error('tgl_lahir')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Hubungan</label>
                                <input class="form-control @error('hubungan') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->hubungan : old('hubungan') }} " name="hubungan"
                                    type="text">
                                @error('hubungan')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control @error('pekerjaan') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->pekerjaan : old('pekerjaan') }} "
                                    name="pekerjaan" type="text">
                                @error('pekerjaan')
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
