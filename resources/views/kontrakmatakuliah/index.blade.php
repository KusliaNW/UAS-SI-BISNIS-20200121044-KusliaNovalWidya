@extends('layouts.app')
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Kontrak Kuliah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Kontrak Kuliah</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Kontrak Kuliah</h3>
                            </div>
                            <div class="col-6 mt-4 ml-4">
                                <a href="{{ route('kontrakmatakuliah.create') }}" class="btn btn-success">Tambah Data</a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Mahasiswa</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontrakMatakuliah as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->mahasiswa->nama_mahasiswa }}</td>
                                                <td>{{ $item->semester->semester }}</td>
                                                <td>
                                                    <form action="{{ route('kontrakmatakuliah.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf @method('DELETE')
                                                        <a class="btn btn-primary"
                                                            href="{{ route('kontrakmatakuliah.edit', $item->id) }}"
                                                            role="button"><i class="fa fa-edit"></i></a>
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('apakah anda mau menghapus data ini ?')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Mahasiswa</th>
                                            <th>Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
