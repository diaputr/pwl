@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Articles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Articles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($art as $item)
                        <tr>
                            <th scope="row">{{ $id++ }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->tgl_publish }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
        <!-- /.content -->
    </div>
@endsection
