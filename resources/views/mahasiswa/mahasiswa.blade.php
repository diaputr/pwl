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
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('mahasiswa/create') }}" class="btn btn-sm btn-success my-2">
                        <i class="fas fa-plus"></i> Add Data
                    </a>
                </div>
                <div class="card-body">
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
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($mhs->count() > 0)
                                @foreach ($mhs as $i => $m)
                                    <tr>
                                        <th scope="row">{{ $i + $mhs->firstItem() }}</th>
                                        <td>{{ $m->nim }}</td>
                                        <td>{{ $m->nama }}</td>
                                        <td>
                                            @if ($m->foto)
                                                <img width="100px" src="{{ asset('storage/' . $m->foto) }}" alt="Foto">
                                            @else
                                                Foto Kosong
                                            @endif
                                        </td>
                                        <td>{{ $m->jk }}</td>
                                        <td>{{ $m->kls->nama }}</td>
                                        <td>{{ $m->prodi->kode }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="btn-group">
                                                <a href="{{ url('/mahasiswa/' . $m->id) }}"
                                                    class="btn btn-sm btn-primary mr-2">
                                                    <i class="fas fa-eye"> </i> Detail </a>
                                                <a href="{{ route('mahasiswa.khs', ['id' => $m->id]) }}"
                                                    class="btn btn-sm btn-success mr-2">
                                                    <i class="fas fa-star"> </i> Grade </a>
                                                <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger btndelete"
                                                        title='Delete'>
                                                        <i class="fas fa-trash"></i> Delete </button>
                                                </form>
                                            </div>
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
                </div>
                <div class="card-footer row">
                    <div class="m-auto">
                        {{ $mhs->links() }}
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
