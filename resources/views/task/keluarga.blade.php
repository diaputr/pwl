@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Families</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Families</li>
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

            <a href="{{ url('keluarga/create') }}" class="btn btn-sm btn-success my-2">
                <i class="fas fa-plus"></i> Add Data
            </a>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Hubungan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @if ($keluarga->count() > 0)
                        @foreach ($keluarga as $item)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->hubungan }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td>
                                    <!-- Bikin tombol edit dan delete -->
                                    <a href="{{ url('/keluarga/' . $item->keluarga_id . '/edit') }}"
                                        class="btn btn-sm btn-warning"> <i class="fas fa-edit"></i> Edit</a>

                                    <form method="POST" action="{{ url('/keluarga/' . $item->keluarga_id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">No Data Available</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </section>
        <!-- /.content -->
    </div>
@endsection
