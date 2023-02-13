@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Daftar Pemilihan</h1>
                <a href="{{ url('/') }}/buatPemilihan" class="btn btn-success">Buat pemilihan</a>
            </div>

            <div class="card-body">
                <table style="width: 100%" id="table-pencatatan" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Event</th>
                            <th>Kode Event</th>
                            <th>Tanggal mulai</th>
                            <th>Tanggal berakhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Pemilu 2024
                            </td>
                            <td>
                                lkad88lfads-fjals8-falsid
                            </td>
                            <td>
                                2023-08-01
                            </td>
                            <td>
                                2023-09-01
                            </td>
                            <td>
                                <span class="col-lg-9 d-flex justify-content-start">
                                    <button type="button" class="btn btn-warning" data-username="${d.username}"
                                        data-toggle="modal" data-target="#form-edit-karyawan">
                                        <li class="fa fa-edit"></li>
                                    </button>
                                    <button type="button" class="btn btn-info btn-delete ml-2">
                                        <li class="fa fa-info"></li>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-delete ml-2"
                                        onclick="hapus('${d.username}')">
                                        <li class="fa fa-trash"></li>
                                    </button>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
