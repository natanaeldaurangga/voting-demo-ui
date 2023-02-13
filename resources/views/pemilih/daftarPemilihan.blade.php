@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Daftar Pemilihan</h1>
            </div>

            <div class="card-body">
                <table style="width: 100%" id="table-pencatatan" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Event</th>
                            <th>Kode Event</th>
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
                                <span class="col-lg-9 d-flex justify-content-start">
                                    <a href="{{ url('/') }}/daftarPemilih" class="btn btn-info btn-delete ml-2">
                                        <li class="fa fa-info"></li>
                                    </a>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
