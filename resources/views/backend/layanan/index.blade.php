@extends('backend.layout.master')

@section('judul')
    Halaman Kelola Layanan
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif



    <div class="container-fluid">
        <div class="row">
            <div class="col-16">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Layanan</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('layanan.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Layanan</th>
                                    <th>ID Layanan</th>
                                    <th>Nama Layanan</th>
                                    <th>Tujuan</th>
                                    <th>Fungsi</th>
                                    <th>Penanggung Jawab Pelayanan</th>
                                    <th>Unit Pelaksana</th>
                                    <th>Kementerian/Lembaga Terkait</th>
                                    <th>Target Layanan</th>
                                    <th>Metode Layanan</th>
                                    <th>Potensi Manfaat</th>
                                    <th>Potensi Ekonomi</th>
                                    <th>Potensi Resiko</th>
                                    <th>Mitigasi Resiko</th>
                                    <th>Data</th>
                                    <th>Aplikasi</th>
                                    <th>Proses Bisnis (Dependency)</th>
                                    <th>Urusan Pemerintahan</th>
                                    <th>RAL Level 1 (Dependency)</th>
                                    <th>RAL Level 2 (Dependency)</th>
                                    <th>Instansi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($layanans as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->kode_layanan }}</td>
                                        <td>{{ $value->id_layanan }}</td>
                                        <td>{{ $value->nama_layanan }}</td>
                                        <td>{{ $value->tujuan }}</td>
                                        <td>{{ $value->fungsi }}</td>
                                        <td>{{ $value->penanggung_jawab_pelayanan }}</td>
                                        <td>{{ $value->unit_pelaksana }}</td>
                                        <td>{{ $value->kementerian_lembaga_terkait }}</td>
                                        <td>{{ $value->target_layanan }}</td>
                                        <td>{{ $value->metode_layanan }}</td>
                                        <td>{{ $value->potensi_manfaat }}</td>
                                        <td>{{ $value->potensi_ekonomi }}</td>
                                        <td>{{ $value->potensi_resiko }}</td>
                                        <td>{{ $value->mitigasi_resiko }}</td>
                                        <td>{{ $value->data }}</td>
                                        <td>{{ $value->aplikasi }}</td>
                                        <td>{{ $value->proses_bisnis_dependency }}</td>
                                        <td>{{ $value->urusan_pemerintahan }}</td>
                                        <td>{{ $value->ral_level_1_dependency }}</td>
                                        <td>{{ $value->ral_level_2_dependency }}</td>
                                        <td>{{ $value->instansi }}</td>
                                        <td>
                                            <form action="" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <a href=""
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="23" class="text-center">Belum ada data layanan</td>
                                    </tr>
                                @endforelse
                            </tbody>
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
@endsection
