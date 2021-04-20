@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span>
        <h2>Bewerk een vak</h2>
            <form method="POST" action="/assignments/{{$assignment->id}}">
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
                    <td><input name="blok" value="{{$assignment->blok}}"></td>
                    <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                    <td><input name="toets" value="{{$assignment->toets}}"></td>
                    <td><input name="weging" value="{{$assignment->weging}}">%</td>
                    <td><input name="ec" value="{{$assignment->ec}}"></td>
                    <td><input name="cijfer" value="{{$assignment->cijfer}}"></td>
                </tr>
                </table>
                <button type="submit">Save changes</button>
            </form>
                <a href="/assignments">
                    <button>Cancel</button>
                </a>
        </span>
    </main>
@endsection
