@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Tambah acara pemilihan</h1>
            </div>

            <div class="card-body">
                <form action="{{ url('/') }}/tambahKandidat" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="saldo">Nama Lengkap</label>
                            <input type="hidden" id="saldo_hidden" name="saldo">
                            <input type="text" class="form-control" id="saldo" placeholder="Nama lengkap">
                        </div>

                        <div class="form-group">
                            <label for="saldo">Username</label>
                            <input type="hidden" id="saldo_hidden" name="saldo">
                            <input type="text" class="form-control" id="saldo" placeholder="Nama lengkap">
                        </div>

                        <div class="form-group">
                            <label for="saldo">Password</label>
                            <input type="hidden" id="saldo_hidden" name="saldo">
                            <input type="text" class="form-control" id="saldo" placeholder="Nama lengkap">
                        </div>

                        <div class="form-group">
                            <label for="created_at">Tanggal Lahir</label>
                            <input type="date" name="created_at" class="form-control d-inline"
                                value="{{ old('created_at', date('Y-m-d H:i')) }}">
                        </div>

                        <div class="form-group">
                            <label for="saldo">Jurusan</label>
                            <input type="hidden" id="saldo_hidden" name="saldo" value="{{ old('saldo') }}">
                            <input type="text" class="form-control" id="saldo" placeholder="Nama event"
                                value="{{ old('saldo') }}">
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
