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
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('artikel/create') }}" class="btn btn-sm btn-success my-2">
                        <i class="fas fa-plus"></i> Add Data
                    </a>

                    <a href="{{ url('artikel/cetak_pdf') }}" class="btn btn-sm btn-primary my-2 float-right">
                        <i class="fas fa-print"></i> Print PDF
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

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Tanggal Publish</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($art->count() > 0)
                                @foreach ($art as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key + $art->firstItem() }}</th>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->tgl_publish }}</td>
                                        <td>
                                            @if ($item->image)
                                                <img width="120px" src="{{ asset('storage/' . $item->image) }}"
                                                    alt="Gambar">
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="btn-group" role="group">
                                                <a href="{{ url('/artikel/' . $item->artikel_id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form method="POST" action="{{ url('/artikel/' . $item->artikel_id) }}">
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
                        {{ $art->links() }}
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
