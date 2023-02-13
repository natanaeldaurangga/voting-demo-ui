@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Daftar Pemilih</h1>
                <a href="{{ url('/') }}/tambahPemilih" class="btn btn-success">Tambah pemilih</a>
            </div>

            <div class="card-body">
                <table style="width: 100%" id="table-pencatatan" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Voter Satu
                            </td>
                            <td>
                                voter1
                            </td>
                            <td>
                                <span class="col-lg-9 d-flex justify-content-start">
                                    <a href="{{ url('/') }}/daftarKandidat" class="btn btn-info btn-delete ml-2">
                                        <li class="fa fa-info"></li>
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Voter Dua
                            </td>
                            <td>
                                voter2
                            </td>
                            <td>
                                <span class="col-lg-9 d-flex justify-content-start">
                                    <a href="{{ url('/') }}/daftarKandidat" class="btn btn-info btn-delete ml-2">
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
