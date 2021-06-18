@extends('layout')
@section('content')
    <main>
        <h1>Accounts</h1>
        <span class="span">
        <h2>Maak een account</h2>
            <form method="POST" action="{{route('register')}}">
            @csrf
                <table>
                    <tr>
                        <th>Gebruikersnaam</th>
                        <th>Wachtwoord</th>
                        <th>E-mail</th>
                    </tr>
                    <tr>
                        <td class="tooltip @error('username') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Gebruik NIET je echte naam!</span>
                            <input name="username" value="{{old('username') ? old('username') : ''}}">
                                @error('username')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('password') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit wachtwoord veld is een ONBEVEILIGDE TEST!</span>
                            <input name="password" value="{{old('password') ? old('password') : ''}}">
                                @error('password')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('password') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit E-mail veld is een ONBEVEILIGDE TEST!</span>
                            <input name="password" value="{{old('password') ? old('password') : ''}}">
                                @error('password')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                    </tr>
                </table>
                <button type="submit">Opslaan</button>
            </form>
                <a href="{{route('assignments.index')}}">
                    <button>Annuleren</button>
                </a>
                <br>
                <a href="{{route('login')}}">
                    <button>Inloggen</button>
                </a>
        </span>
    </main>
@endsection
