@extends('layouts.nav2')

@section('container')


      <h1 style="text-align: center;">Jadwal Dokter</h1>
      
    <table style="background-color: aliceblue">
        <a href="/login">
            <center>
            <button class="button_tambah">
                TAMBAH DATA
            </button>
        </center>
        <br>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Dokter</th>
                <th>Jadwal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Afifah</td>
                <td>senin</td>
            </tr>
            <tr>
                <td>2</td>
                <td>nizar</td>
                <td>selasa</td>
            </tr>
        </tbody>
    </table>
@endsection('container')