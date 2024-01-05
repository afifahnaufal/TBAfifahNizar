@extends('layouts.nav2')

@section('container')

<table style="background-color: aliceblue">
    <a href="/login">
        <center>
        <button class="button_tambah">
            TAMBAH DATA
        </button>
    </center>
    </a>
    <br>
    <thead>
        <tr>
            <th>OID</th>
            <th>Nama Obat</th>
            <th>Nama Penyakit</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Ultraflu</td>
            <td> pilek</td>
            <td>
                <a href="/login">
                    <button class="button_delete">
                        DELETE
                    </button>
                    <button class= "button_edit">
                        EDIT
                    </button>
                </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>OBHcombi</td>
            <td>batuk berdahak</td>
            <td>
                <a href="/login">
                    <button class="button_delete">
                        DELETE
                    </button>
                    <button class= "button_edit">
                        EDIT
                    </button>
                </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Oralit</td>
            <td>mencret</td>
            <td>
                <a href="/login">
                    <button class="button_delete">
                        DELETE
                    </button>
                    <button class= "button_edit">
                        EDIT
                    </button>
                </a>
            </td>
        </tr>
    </tbody>
</table>

@endsection('container')