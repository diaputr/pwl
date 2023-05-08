@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Course Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="card" style="width: 50%">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Kode : </b>{{ $matkul->kode }}</li>
                            <li class="list-group-item"><b>Nama : </b>{{ $matkul->nama }}</li>
                            {{-- <li class="list-group-item"><b>Gender :
                                </b>{{ $matkul->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</li>
                            <li class="list-group-item"><b>Tempat, Tanggal Lahir : </b>{{ $matkul->tempat_lahir }},
                                {{ $matkul->tgl_lahir }}</li> --}}
                            <li class="list-group-item"><b>Semester : </b>{{ $matkul->semester }}</li>
                            <li class="list-group-item"><b>Satuan Kredit Semester : </b>{{ $matkul->sks }}</li>
                            <li class="list-group-item"><b>Jam : </b>{{ $matkul->jam }}</li>
                        </ul>
                        <a class="btn btn-primary mt-3 float-right" href="{{ url('/matkul') }}">Back</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
