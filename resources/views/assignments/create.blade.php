@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span>
        <h2>Maak een nieuw vak</h2>
            <form method="POST" action="/assignments/">
                @csrf
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
                    <td><input></td>
                    <td><input></td>
                    <td><input></td>
                    <td><input>%</td>
                    <td><input></td>
                    <td><input></td>
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
