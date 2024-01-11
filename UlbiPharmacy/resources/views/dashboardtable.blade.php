@extends('layouts.nav2')

@section('container')

<a href="/login">
    <center>
    <button class="button_tambah">
        TAMBAH DATA
    </button>
</center>
</a>
<br>
    <table style="background-color: aliceblue">
        <thead>
            <tr>
                <th>PID</th>
                <th>Nama Penyakit</th>
                <th>Gejala</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Flu</td>
                <td>demam, pilek, radang</td>
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
                <td>Batuk</td>
                <td>sakit kepala, nyeri dada, nyeri tenggorokan</td>
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
                <td>Diare</td>
                <td>nyeri bagian perut,mencret</td>
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