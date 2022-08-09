@extends('layouts.app')
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data</h1>
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
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                            </div>
                            <div class="col-6 mt-4 ml-4">
                                {{-- <a href="{{ route('semester.create') }}" class="btn btn-success">Tambah Data</a> --}}
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('absen.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Waktu Absen</label>
                                            <input type="date" class="form-control" id="inputEmail4" name="waktu_absen">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Mahasiswa</label>
                                            <select id="inputState" name="mahasiswa_id" class="form-control">
                                                <option selected>Choose...</option>
                                                @foreach ($mahasiswa as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_mahasiswa }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Matakuliah</label>
                                            <select id="inputState" name="matakuliah_id" class="form-control">
                                                <option selected>Choose...</option>
                                                @foreach ($matakuliah as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_matakuliah }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Keterangan</label>
                                            <select id="inputState" name="keterangan" class="form-control">
                                                <option value="Hadir">Hadir</option>
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
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
