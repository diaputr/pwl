@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Article Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Article Form</li>
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
                        <form method="POST" action="{{ $urlform }}" enctype="multipart/form-data">
                            @csrf
                            {!! isset($art) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Judul</label>
                                <input class="form-control @error('judul') is-invalid @enderror"
                                    value="{{ isset($art) ? $art->judul : old('judul') }} " name="judul" type="text">
                                @error('judul')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Penulis</label>
                                <input class="form-control @error('penulis') is-invalid @enderror"
                                    value="{{ isset($art) ? $art->penulis : old('penulis') }} " name="penulis"
                                    type="text">
                                @error('penulis')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Hobi" {{ isset($art) && $art->kategori == 'Hobi' ? 'selected' : '' }}>
                                        Hobi</option>
                                    <option value="Politik"
                                        {{ isset($art) && $art->kategori == 'Politik' ? 'selected' : '' }}>Politik</option>
                                    <option value="Keseharian"
                                        {{ isset($art) && $art->kategori == 'Keseharian' ? 'selected' : '' }}>Keseharian
                                    </option>
                                </select>
                                @error('kategori')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Publish</label>
                                <input class="form-control @error('tgl_publish') is-invalid @enderror"
                                    value="{{ isset($art) ? $art->tgl_publish : old('tgl_publish') }}" name="tgl_publish"
                                    type="date">
                                @error('tgl_publish')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                @if (isset($art) && $art->image)
                                    <div class="my-2">
                                        <img width="120px" src="{{ asset('storage/' . $art->image) }}">
                                    </div>
                                    <input type="file" class="form-control" name="image">
                                @else
                                    <input type="file" class="form-control" required="required" name="image"
                                        value="{{ old('image') }}">
                                @endif
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
