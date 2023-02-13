@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Tambah acara pemilihan</h1>
            </div>

            <div class="card-body">
                <form action="/kas" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="saldo">Nama Event</label>
                            <input type="hidden" id="saldo_hidden" name="saldo" value="{{ old('saldo') }}">
                            <input type="text" class="form-control" id="saldo" placeholder="Nama event"
                                value="{{ old('saldo') }}">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                cols="30" rows="10">{{ old('keterangan') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="created_at">Tanggal Mulai</label>
                            <input type="date" name="created_at"
                                class="form-control d-inline @error('created_at') is-invalid @enderror"
                                value="{{ old('created_at', date('Y-m-d H:i')) }}">
                        </div>
                        <div class="form-group">
                            <label for="created_at">Tanggal Berakhir</label>
                            <input type="date" name="created_at"
                                class="form-control d-inline @error('created_at') is-invalid @enderror"
                                value="{{ old('created_at', date('Y-m-d H:i')) }}">
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
