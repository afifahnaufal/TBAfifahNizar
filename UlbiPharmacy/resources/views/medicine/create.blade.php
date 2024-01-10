@extends('layouts.template')

@section('konten')
<form action='{{ route('simpan.medicine')}}' method='POST'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        {{-- <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' id="id">
            </div>
        </div> --}}
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Obat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Untuk Gejala</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gejala' id="gejala">
            </div>
        </div>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
@endsection
