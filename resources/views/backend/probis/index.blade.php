@extends('backend.layout.master')

@section('judul')
    Halaman Kelola Proses Bisnis
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
                <h3 class="card-title">Data proses Bisnis</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ route ('probis.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Bisnis</th>
                    <th>Nama Bisnis</th>
                    <th>Uraian Bisnis</th>
                    <th>Sasaran</th>
                    <th>Indikator</th>
                    <th>Nilai IKU Target</th>
                    <th>Nilai IKU Realisasi</th>
                    <th>RAB Level 1</th>
                    <th>RAB Level 2</th>
                    <th>RAB Level 3</th>
                    <th>RAB Level 4</th>
                    <th>RAB Level 5</th>
                    <th>Unit Kerja</th>
                    <th>Instansi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($probis as $key => $value)
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td>{{$value->id_probis}}</td>
                          <td>{{$value->nama_probis}}</td>
                          <td>{{$value->uraian}}</td>
                          <td>{{$value->sasaran}}</td>
                          <td>{{$value->indikator}}</td>
                          <td>{{$value->nilai_iku_targer}}</td>
                          <td>{{$value->nilai_iku_realisasi}}</td>
                          <td>{{$value->rab_l1}}</td>
                          <td>{{$value->rab_l2}}</td>
                          <td>{{$value->rab_l3}}</td>
                          <td>{{$value->rab_l4}}</td>
                          <td>{{$value->rab_l5}}</td>
                          <td>{{$value->unit_kerja}}</td>
                          <td>{{$value->instansi}}</td>

                        
                          <td>
                            <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              @csrf
                              @method('DELETE')
                              <a href="" class="btn btn-warning btn-sm">Edit</a>
                              <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                        </tr>
                    @empty
                    <tr>
                      <td colspan="16" class="text-center">Belum ada data pegawai</td>
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