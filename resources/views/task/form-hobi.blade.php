@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hobby Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hobby Form</li>
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
                            {!! isset($hobi) ? method_field('PUT') : '' !!}

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ isset($hobi) ? $hobi->nama : old('nama') }} " name="nama" type="text">
                                @error('nama')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Seni"
                                        {{ isset($hobi) && $hobi->kategori == 'Seni' ? 'selected' : '' }}>
                                        Seni</option>
                                    <option value="Teknologi"
                                        {{ isset($hobi) && $hobi->kategori == 'Teknologi' ? 'selected' : '' }}>Teknologi
                                    </option>
                                    <option value="Musik"
                                        {{ isset($hobi) && $hobi->kategori == 'Musik' ? 'selected' : '' }}>Musik
                                    </option>
                                    <option value="Hiburan"
                                        {{ isset($hobi) && $hobi->kategori == 'Hiburan' ? 'selected' : '' }}>Hiburan
                                    </option>
                                    <option value="Olahraga"
                                        {{ isset($hobi) && $hobi->kategori == 'Olahraga' ? 'selected' : '' }}>Olahraga
                                    </option>
                                    <option value="Kuliner"
                                        {{ isset($hobi) && $hobi->kategori == 'Kuliner' ? 'selected' : '' }}>Kuliner
                                    </option>
                                    <option value="Sastra"
                                        {{ isset($hobi) && $hobi->kategori == 'Sastra' ? 'selected' : '' }}>Sastra
                                    </option>
                                </select>
                                @error('kategori')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Level</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="level" value="Beginner"
                                        {{ isset($hobi) && $hobi->level == 'Beginner' ? 'checked' : '' }}>
                                    <label class="form-check-label">Beginner</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="level" value="Intermediate"
                                        {{ isset($hobi) && $hobi->level == 'Intermediate' ? 'checked' : '' }}>
                                    <label class="form-check-label">Intermediate</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="level" value="Advanced"
                                        {{ isset($hobi) && $hobi->level == 'Advanced' ? 'checked' : '' }}>
                                    <label class="form-check-label">Advanced</label>
                                </div>
                                @error('jk')
                                    <div class="error invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input class="form-control @error('deskripsi') is-invalid @enderror"
                                    value="{{ isset($hobi) ? $hobi->deskripsi : old('deskripsi') }} " name="deskripsi"
                                    type="text">
                                @error('deskripsi')
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
