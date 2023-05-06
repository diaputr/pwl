@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student Detail</li>
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
                            <li class="list-group-item"><b>NIM : </b>{{ $mhs->nim }}</li>
                            <li class="list-group-item"><b>Nama : </b>{{ $mhs->nama }}</li>
                            <li class="list-group-item"><b>Gender :
                                </b>{{ $mhs->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</li>
                            <li class="list-group-item"><b>Tempat, Tanggal Lahir : </b>{{ $mhs->tempat_lahir }},
                                {{ $mhs->tgl_lahir }}</li>
                            <li class="list-group-item"><b>Kelas : </b>{{ $mhs->kls->nama }}</li>
                            <li class="list-group-item"><b>Program Studi : </b>{{ $mhs->prodi->nama }}</li>
                            <li class="list-group-item"><b>Alamat : </b>{{ $mhs->alamat }}</li>
                            <li class="list-group-item"><b>Hp : </b>{{ $mhs->hp }}</li>
                        </ul>
                        <a class="btn btn-primary mt-3 float-right" href="{{ url('/mahasiswa') }}">Back</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
