@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kartu Hasil Studi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Course Grade</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="card" style="width: 98%">
                    <div class="card-body">
                        <h6><b>Nama : </b>{{ $mhs->nama }} <br></h6>
                        <h6><b>NIM : </b>{{ $mhs->nim }} <br></h6>
                        <h6><b>Kelas : </b>{{ $mhs->prodi->kode }} - {{ $mhs->kls->nama }} </h6>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($mhs->matkul->count() > 0)
                                    @foreach ($mhs->matkul as $key => $matkul)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $matkul->kode }}</td>
                                            <td>{{ $matkul->nama }}</td>
                                            <td>{{ $matkul->sks }}</td>
                                            <td>{{ $matkul->pivot->nilai }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="12" class="text-center">No Data Available</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-dark my-2 float-right" href="{{ url('/mahasiswa') }}">Back</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
