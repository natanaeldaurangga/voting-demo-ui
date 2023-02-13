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
                            <label for="created_at">Tanggal Lahir</label>
                            <input type="date" name="created_at"
                                class="form-control d-inline @error('created_at') is-invalid @enderror"
                                value="{{ old('created_at', date('Y-m-d H:i')) }}">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Visi</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                cols="30" rows="5">{{ old('keterangan') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Misi</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                cols="30" rows="5">{{ old('keterangan') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
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
