<!DOCTYPE html>
<html>

<head>
    <title>Cetak KHS Dalam PDF</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body>
    <style type="text/css">
        * {
            font-size: 12pt;
        }
    </style>
    <center>
        <h6>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h6> <br><br>
        <h3>KARTU HASIL STUDI (KHS)</h3>
    </center>
    <br>
    <section class="content">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <b>Nama : </b>{{ $mhs->nama }} <br>
                    <b>NIM : </b>{{ $mhs->nim }} <br>
                    <b>Kelas : </b>{{ $mhs->prodi->kode }} - {{ $mhs->kls->nama }}
                    <table class="table table-bordered mt-3">
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
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
