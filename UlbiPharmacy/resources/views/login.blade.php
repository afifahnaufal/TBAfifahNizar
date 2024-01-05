@extends('layouts.nav')

<div class="container min-w-full h-screen flex justify-center items-center">
    <div class="box w-96 bg-white shadow p-5 rounded">
        <p class="text-6xl font-bold">LOGIN</p>
    
        <table>
            <tr>
                <td>
                    <label for="">Email</label>
                </td>
                <td>
                    <input type="text" placeholder="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Password</label>
                </td>
                <td>
                    <input type="password" placeholder="password">
                </td>
            </tr>

        </table>

        <br>
        <button>masuk!</button>
    </div>
 </div>
  </div>

@section('container')
@endsection('container')