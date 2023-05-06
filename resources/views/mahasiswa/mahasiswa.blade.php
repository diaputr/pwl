@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Students</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Students</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if (session('success'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <a href="{{ url('mahasiswa/create') }}" class="btn btn-sm btn-success my-2">
                <i class="fas fa-plus"></i> Add Data
            </a>

            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        {{-- <th>Alamat</th> --}}
                        {{-- <th>HP</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($mhs->count() > 0)
                        @foreach ($mhs as $i => $m)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $m->nim }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->jk }}</td>
                                <td>{{ $m->kls->nama }}</td>
                                <td>{{ $m->prodi->kode }}</td>
                                {{-- <td>{{ $m->alamat }}</td> --}}
                                {{-- <td>{{ $m->hp }}</td> --}}
                                <td>
                                    <!-- Bikin tombol edit dan delete -->
                                    <a href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-primary"> <i
                                            class="fas fa-eye"> </i> Detail</a><br>
                                    <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit </a>

                                    <form method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btndelete" title='Delete'> <i
                                                class="fas fa-trash"></i>
                                            Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12" class="text-center">No Data Available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </section>
        <!-- /.content -->
    </div>

@endsection
