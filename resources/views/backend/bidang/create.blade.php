@extends('backend.layout.master')

@section('judul')
    Halaman Tambah Bidang
@endsection

@section('content')
    <form method="POST" action="{{ route('bidang.import') }}" enctype="multipart/form-data">
        @csrf
        <div class="mt-2">
            <label>Pilih File</label>
            <input type="file" name="file" class="form-control">
        </div>

        <div class="mt-2">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>
    
    <form action="{{ route('bidang.store') }}" method="POST">
        @csrf
        <div class="box-body">

            <div class="form-group">
                <label>Nama Bidang</label>
                <input type="text" class="form-control" name="nama_bidang" placeholder="Isikan Nama Bidang">
            </div>
            @error('nama_bidang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('bidang.index') }}" class="btn btn-default">Kembali</a>
            </div>
        </div>
    </form>
@endsection
