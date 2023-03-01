@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Experiences</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Experiences</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">College's Story</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    College life as an Information Technology student has been a unique experience for me. <br>
                    From learning how to code and design software to exploring the latest technology trends, <br>
                    I've been exposed to a wide range of valuable skills and knowledge that I know will serve me well in my
                    future career. <br>
                    In addition to my homework, I've had the opportunity to work on exciting projects with my classmates,
                    <br>
                    collaborating and exchanging ideas to develop innovative solutions. <br>
                    Overall, I'm grateful for the chance to study Information Technology <br>
                    and for the doors it will open for me in the future.
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <i>JTI</i>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
