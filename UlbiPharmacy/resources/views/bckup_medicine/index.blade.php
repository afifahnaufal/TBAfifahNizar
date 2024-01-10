@extends('layout.template')

@section('konten')
{{-- <form action='' method='post'>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nim' id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div> --}}
    <!-- AKHIR FORM -->
    
    <!-- START DATA -->
    {{-- <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="" method="get">
                  <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Cari</button>
              </form>
            </div> --}}
            
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href="{{ route('create.medicine')}}" class="btn btn-primary">+ Tambah Data</a>
            </div>
      
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        {{-- <th class="col-md-3">ID</th> --}}
                        <th class="col-md-4">Nama</th>
                        <th class="col-md-2">Untuk Gejala</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    @foreach ($nama_obat as $no)
                        
                    
                    <tr>
                        <td><?= $i ?></td>
                        {{-- <td>{!! $no->nama!!}</td> --}}
                        <td>{!! $no->nama!!}</td>
                        <td>{!! $no->gejala!!}</td>
                        <td>    
                            <a href="{{ route('edit.medicine')}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('delete.medicine')}}"class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
      </div>
@endsection
       <!-- START FORM -->
     
          <!-- AKHIR DATA -->
   