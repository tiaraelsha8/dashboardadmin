@extends('backend.layout.master')

@section('judul')
    Halaman Tambah Layanan
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="POST" action="{{ route('layanan.import') }}" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <label>Pilih File</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <div class="mt-2">
                    <button class="btn btn-primary">Submit</button>
                </div>

            </form>


        </div>
    </div>
@endsection
