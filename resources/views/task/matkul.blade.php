@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Courses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Ruang</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($matkul as $item)
                        <tr>
                            <th scope="row">{{ $id++ }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->dosen }}</td>
                            <td>{{ $item->sks }}</td>
                            <td>{{ $item->hari }}</td>
                            <td>{{ $item->ruang }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
        <!-- /.content -->
    </div>
@endsection
