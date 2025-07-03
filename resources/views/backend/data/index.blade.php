@extends('backend.layout.master')

@section('judul')
    Halaman Kelola Data
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
                        <h3 class="card-title">Data</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('data.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Data</th>
                                    <th>ID Data</th>
                                    <th>Nama Data</th>
                                    <th>Uraian Data</th>
                                    <th>Tujuan dari</th>
                                    <th>Aplikasi</th>
                                    <th>Sifat Data</th>
                                    <th>Validitas Data</th>
                                    <th>Jenis Data</th>
                                    <th>Penghasil Data</th>
                                    <th>Penanggung Jawab Data</th>
                                    <th>Informasi Terkait (Input)</th>
                                    <th>Informasi Terkait (Output)</th>
                                    <th>Interoperabilitas</th>
                                    <th>Proses Bisnis (Dependency)</th>
                                    <th>Layanan (Dependency)</th>
                                    <th>RAD Level 1 (Dependency)</th>
                                    <th>RAD Level 2 (Dependency)</th>
                                    <th>Standar Teknis Keamanan SPBE</th>
                                    <th>Audit Keamanan SPBE</th>
                                    <th>Identifikasi Kerentanan SPBE</th>
                                    <th>Kelaikan Keamanan SPBE</th>
                                    <th>Edukasi Kesadaran SPBE</th>
                                    <th>Penanganan Insiden SPBE</th>
                                    <th>Peningkatan Keamanan SPBE</th>
                                    <th>Instansi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($datas as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->kode_data }}</td>
                                        <td>{{ $item->id_data }}</td>
                                        <td>{{ $item->nama_data }}</td>
                                        <td>{{ $item->uraian_data }}</td>
                                        <td>{{ $item->tujuan_dari }}</td>
                                        <td>{{ $item->aplikasi }}</td>
                                        <td>{{ $item->sifat_data }}</td>
                                        <td>{{ $item->validitas_data }}</td>
                                        <td>{{ $item->jenis_data }}</td>
                                        <td>{{ $item->penghasil_data }}</td>
                                        <td>{{ $item->penanggung_jawab_data }}</td>
                                        <td>{{ $item->informasi_terkait_input }}</td>
                                        <td>{{ $item->informasi_terkait_output }}</td>
                                        <td>{{ $item->interoperabilitas }}</td>
                                        <td>{{ $item->proses_bisnis_dependency }}</td>
                                        <td>{{ $item->layanan_dependency }}</td>
                                        <td>{{ $item->rad_level_1_dependency }}</td>
                                        <td>{{ $item->rad_level_2_dependency }}</td>
                                        <td>{{ $item->standar_teknis_spbe }}</td>
                                        <td>{{ $item->audit_keamanan_spbe }}</td>
                                        <td>{{ $item->identifikasi_kerentanan_spbe }}</td>
                                        <td>{{ $item->kelaikan_keamanan_spbe }}</td>
                                        <td>{{ $item->edukasi_kesadaran_spbe }}</td>
                                        <td>{{ $item->penanganan_insiden_spbe }}</td>
                                        <td>{{ $item->peningkatan_keamanan_spbe }}</td>
                                        <td>{{ $item->instansi }}</td>
                                        <td>
                                            <form action="{{ route('data.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('data.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="28" class="text-center">Belum ada data</td>
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
