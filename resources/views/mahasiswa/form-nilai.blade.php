@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Grade Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Grade Form</li>
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
                                <label>Kelas</label>
                                <select name="id_kelas" class="form-control">
                                    <option value="">-- Pilih Kelas --</option>
                                    @foreach ($kls as $kelas)
                                        <option value="{{ $kelas->id }}"
                                            {{ isset($mhs) && $mhs->id_kelas == $kelas->id ? 'selected' : '' }}>
                                            {{ $kelas->nama }}</option>
                                    @endforeach
                                </select>
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
