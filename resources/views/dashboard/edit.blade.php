@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span>
        <h2>Bewerk een vak</h2>
            <form method="POST" action="/dashboard/{{$assignment->id}}">
                @csrf
                @method('put')
                <table>
                <tr>
                    <th>Blok</th>
                    <th>Cursus</th>
                    <th>Toets</th>
                    <th>Weging</th>
                    <th>EC</th>
                    <th>Cijfer</th>
                </tr>
                <tr>
                    <td><input value="{{$assignment->blok}}"></td>
                    <td><input value="{{$assignment->cursus}}"></td>
                    <td><input value="{{$assignment->toets}}"></td>
                    <td><input value="{{$assignment->weging}}">%</td>
                    <td><input value="{{$assignment->ec}}"></td>
                    <td><input value="{{$assignment->cijfer}}"></td>
                </tr>
                </table>
                <button type="submit">Save changes</button>
            </form>
                <a href="/dashboard">
                    <button>Cancel</button>
                </a>
        </span>
    </main>
@endsection
