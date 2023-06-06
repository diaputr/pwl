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
                    <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">
                        <i class="fa fa-plus"></i> Add Data</button>
                </div>
                <div class="card-body table-responsive">
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
                    <table class="table table-bordered table-striped" id="data_mahasiswa">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Gender</th>
                                <th>No. Telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Student Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        {{-- <div class="form-group">
                            <label for="image">Foto</label>
                            <input type="file" class="form-control" name="image" id="foto">
                            @if (isset($mhs) && $mhs->foto)
                                <div class="mb-3">
                                    <img width="100px" src="{{ asset('storage/' . $mhs->foto) }}"
                                        data-src="{{ $mhs->foto }}">
                                </div>
                            @endif
                        </div> --}}
                        <div class="form-group">
                            <label>NIM</label>
                            <input class="form-control @error('nim') is-invalid @enderror" name="nim" type="text"
                                id="nim">
                            @error('nim')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" name="nama" type="text"
                                id="nama">
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" value="L" id="jk_l">
                                <label class="form-check-label" for="jk_l">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" value="P" id="jk_p">
                                <label class="form-check-label" for="jk_p">Perempuan</label>
                            </div>
                            @error('jk')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="id_kelas" class="form-control" id="kelas">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select name="id_prodi" class="form-control" id="prodi">
                                <option value="">-- Pilih Prodi --</option>
                                @foreach ($prodi as $pro)
                                    <option value="{{ $pro->id }}">{{ $pro->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Tempat, Tanggal Lahir</label>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                                    type="text" id="tempat_lahir">
                                @error('tempat_lahir')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                                    type="date" id="tgl_lahir">
                                @error('tgl_lahir')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                type="text" id="alamat">
                            @error('alamat')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>No. Telp</label>
                            <input class="form-control @error('hp') is-invalid @enderror" name="hp" type="text"
                                id="hp">
                            @error('hp')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="detail_mahasiswa" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Student Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>NIM : </b><span id="nim"></span></li>
                        <li class="list-group-item"><b>Nama : </b><span id="nama"></span></li>
                        <li class="list-group-item"><b>Gender : </b><span id="jk"></span></li>
                        <li class="list-group-item"><b>Tempat, Tanggal Lahir : </b><span id="tempat_lahir"></span>,
                            <span id="tgl_lahir"></span>
                        </li>
                        {{-- <li class="list-group-item"><b>Kelas : </b><span id="kelas"></span></li> --}}
                        {{-- <li class="list-group-item"><b>Program Studi : </b><span id="prodi"></span></li> --}}
                        <li class="list-group-item"><b>Alamat : </b><span id="alamat"></span></li>
                        <li class="list-group-item"><b>Hp : </b><span id="hp"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Student Data');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #foto').attr('src', $(th).data('foto'));
            var jk = $(th).data('jk');
            if (jk == 'L') {
                $('#modal_mahasiswa #jk_l').prop('checked', true);
            } else if (jk == 'P') {
                $('#modal_mahasiswa #jk_p').prop('checked', true);
            }
            $('#modal_mahasiswa #kelas').val($(th).data('id_kelas'));
            $('#modal_mahasiswa #prodi').val($(th).data('id_prodi'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #tgl_lahir').val($(th).data('tgl_lahir'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function showData(th) {
            $('#detail_mahasiswa').modal('show');
            $('#detail_mahasiswa #nim').html($(th).data('nim'));
            $('#detail_mahasiswa #nama').html($(th).data('nama'));
            $('#detail_mahasiswa #jk').html($(th).data('jk'));
            var jk = $(th).data('jk');
            if (jk == 'L') {
                $('#detail_mahasiswa #jk').html('Laki-laki');
            } else {
                $('#detail_mahasiswa #jk').html('Perempuan');
            }
            $('#detail_mahasiswa #kelas').html($(th).data('kelas'));
            $('#detail_mahasiswa #prodi').html($(th).data('prodi'));
            $('#detail_mahasiswa #tempat_lahir').html($(th).data('tempat_lahir'));
            $('#detail_mahasiswa #tgl_lahir').html($(th).data('tgl_lahir'));
            $('#detail_mahasiswa #alamat').html($(th).data('alamat'));
            $('#detail_mahasiswa #hp').html($(th).data('hp'));
        }

        function deleteData(th) {
            var url = $(th).data('url');
            var confirmation = confirm('Apakah anda yakin ingin menghapus data ini?');
            if (confirmation == true) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            alert(data.message);
                            dataMahasiswa.ajax.reload(null, false);
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        }

        $(document).ready(function() {
            var dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return data != null ?
                                `<img width="100px" src="{{ asset('storage') }}/` + data + `">` :
                                'No Image';
                        }
                    },
                    {
                        data: 'jk',
                        name: 'jk',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'hp',
                        name: 'hp',
                        sortable: false,
                        searchable: false
                    },
                    /*{
                        data: 'nama_kelas',
                        name: 'kelas.nama',
                        sortable: false,
                        searchable: false
                    },
                    {
                        data: 'prodi',
                        name: 'prodi.nama',
                        sortable: false,
                        searchable: false
                    },*/
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var btn = `
                                <div class="d-flex">                                    
                                    <button data-url="{{ url('/mahasiswa') }}/" + data 
                                            class="btn btn-sm btn-primary mr-2" 
                                            onclick="showData(this)" 
                                            data-id="` + row.id + `"
                                            data-foto="{{ asset('storage') }}/` + row.foto + `"
                                            data-nim="` + row.nim + `"
                                            data-nama="` + row.nama + `"
                                            data-jk="` + row.jk + `"
                                            data-kelas="` + row.id_kelas + `"
                                            data-prodi="` + row.id_prodi + `"
                                            data-tempat_lahir="` + row.tempat_lahir + `"
                                            data-tgl_lahir="` + row.tgl_lahir + `"
                                            data-alamat="` + row.alamat + `"
                                            data-hp="` + row.hp + `">
                                        <i class="fa fa-eye"></i> Detail
                                    </button>
                                    <button data-url="{{ url('/mahasiswa') }}/${data}" 
                                            class="btn btn-sm btn-warning mr-2" 
                                            onclick="updateData(this)" 
                                            data-id="` + row.id + `"
                                            data-foto="{{ asset('storage') }}/` + row.foto + `"
                                            data-nim="` + row.nim + `"
                                            data-nama="` + row.nama + `"
                                            data-jk="` + row.jk + `"
                                            data-id_kelas="` + row.id_kelas + `"
                                            data-id_prodi="` + row.id_prodi + `"
                                            data-tempat_lahir="` + row.tempat_lahir + `"
                                            data-tgl_lahir="` + row.tgl_lahir + `"
                                            data-alamat="` + row.alamat + `"
                                            data-hp="` + row.hp + `">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>                            
                                    <button onclick="deleteData(this)" class="btn btn-sm btn-danger" data-url="{{ url('/mahasiswa') }}/${data}">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>                                
                                </div>
                            `;
                            return btn;
                        }
                    },

                ]
            });

            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this); // Membuat objek FormData dari form
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: formData,
                    dataType: 'json',
                    processData: false, // Nonaktifkan pengolahan data secara otomatis
                    contentType: false, // Nonaktifkan header Content-Type secara otomatis
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endpush
