@extends('layouts.app')
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                                <h3 class="card-title">Data Mahasiswa</h3>
                            </div>
                            <div class="col-6 mt-4 ml-4">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#AddMahasiswaModal">
                                    Tambah Data
                                </button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="AddMahasiswaModal" tabindex="-1" role="dialog"
                                aria-labelledby="AddMahasiswaModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <ul id="save_msgList"></ul>

                                            <div class="form-group mb-3">
                                                <label for="">Nama Mahasiswa</label>
                                                <input type="text" required class="nama_mahasiswa form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Alamat</label>
                                                <input type="text" required class="alamat form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">No HP</label>
                                                <input type="text" required class="no_tlp form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Email</label>
                                                <input type="text" required class="email form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary add_mahasiswa">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Edit Modal --}}
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit & Update mahasiswa Data
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <ul id="update_msgList"></ul>

                                            <input type="hidden" id="mahasiswa_id" />

                                            <div class="form-group mb-3">
                                                <label for="">Nama Mahasiswa</label>
                                                <input type="text" required id="nama_mahasiswa" class=" form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Alamat</label>
                                                <input type="text" required id="alamat" class="alamat form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">No HP</label>
                                                <input type="text" required id="no_tlp" class=" form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Email</label>
                                                <input type="text" required id="email" class="email form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="btn btn-primary update_mahasiswa">Update</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- Edn- Edit Modal --}}


                            {{-- Delete Modal --}}
                            <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete mahasiswa Data</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Confirm to Delete Data ?</h4>
                                            <input type="hidden" id="deleteing_id">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary delete_mahasiswa">Yes
                                                Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End - Delete Modal --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
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

@section('script')
    <script>
        $(document).ready(function() {

            fetchmahasiswa();

            function fetchmahasiswa() {
                $.ajax({
                    type: "GET",
                    url: "/fetch-mahasiswa",
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        $('tbody').html("");
                        $.each(response.mahasiswa, function(key, item) {
                            $('tbody').append(
                                '<tr>\
                                                    <td>' + item.id + '</td>\
                                                    <td>' + item.nama_mahasiswa + '</td>\
                                                    <td>' + item.alamat + '</td>\
                                                    <td>' + item.no_tlp + '</td>\
                                                    <td>' + item.email + '</td>\
                                                    <td><button type="button" value="' + item.id + '" class="btn btn-success editbtn btn-sm">Edit</button></td>\
                                                    <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                                                \</tr>'
                            );
                        });
                    }
                });
            }

            $(document).on('click', '.add_mahasiswa', function(e) {
                e.preventDefault();

                $(this).text('Sending..');

                var data = {
                    'nama_mahasiswa': $('.nama_mahasiswa').val(),
                    'alamat': $('.alamat').val(),
                    'no_tlp': $('.no_tlp').val(),
                    'email': $('.email').val(),
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/mahasiswa",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 400) {
                            $('#save_msgList').html("");
                            $('#save_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_value) {
                                $('#save_msgList').append('<li>' + err_value + '</li>');
                            });
                            $('.add_mahasiswa').text('Save');
                        } else {
                            $('#save_msgList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#AddMahasiswaModal').find('input').val('');
                            $('.add_mahasiswa').text('Save');
                            $('#AddMahasiswaModal').modal('hide');
                            fetchmahasiswa();
                        }
                    }
                });

            });

            $(document).on('click', '.editbtn', function(e) {
                e.preventDefault();
                var mahasiswa_id = $(this).val();
                // alert(mahasiswa_id);
                $('#editModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/edit-mahasiswa/" + mahasiswa_id,
                    success: function(response) {
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#editModal').modal('hide');
                        } else {
                            // console.log(response.student.name);
                            $('#nama_mahasiswa').val(response.mahasiswa.nama_mahasiswa);
                            $('#alamat').val(response.mahasiswa.alamat);
                            $('#no_tlp').val(response.mahasiswa.no_tlp);
                            $('#email').val(response.mahasiswa.email);
                            $('#mahasiswa_id').val(mahasiswa_id);
                        }
                    }
                });
                $('.close').find('input').val('');

            });

            $(document).on('click', '.update_mahasiswa', function(e) {
                e.preventDefault();

                $(this).text('Updating..');
                var id = $('#mahasiswa_id').val();
                // alert(id);

                var data = {
                    'nama_mahasiswa': $('#nama_mahasiswa').val(),
                    'alamat': $('#alamat').val(),
                    'no_tlp': $('#no_tlp').val(),
                    'email': $('#email').val(),
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/update-mahasiswa/" + id,
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 400) {
                            $('#update_msgList').html("");
                            $('#update_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_value) {
                                $('#update_msgList').append('<li>' + err_value +
                                    '</li>');
                            });
                            $('.update_mahasiswa').text('Update');
                        } else {
                            $('#update_msgList').html("");

                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#editModal').find('input').val('');
                            $('.update_mahasiswa').text('Update');
                            $('#editModal').modal('hide');
                            fetchmahasiswa();
                        }
                    }
                });

            });

            $(document).on('click', '.deletebtn', function() {
                var mahasiswa_id = $(this).val();
                $('#DeleteModal').modal('show');
                $('#deleteing_id').val(mahasiswa_id);
            });

            $(document).on('click', '.delete_mahasiswa', function(e) {
                e.preventDefault();

                $(this).text('Deleting..');
                var id = $('#deleteing_id').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete-mahasiswa/" + id,
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('.delete_mahasiswa').text('Yes Delete');
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('.delete_mahasiswa').text('Yes Delete');
                            $('#DeleteModal').modal('hide');
                            fetchmahasiswa();
                        }
                    }
                });
            });

        });
    </script>
@endsection
