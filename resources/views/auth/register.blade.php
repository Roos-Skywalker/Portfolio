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
                        <th>E-mail</th>
                        <th>Wachtwoord</th>
                        <th>Wachtwoord bevestigen</th>
                    </tr>
                    <tr>
                        <td class="tooltip @error('username') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Gebruik NIET je echte naam!</span>
                            <input name="username" type="text" value="{{old('username') ? old('username') : ''}}">
                                @error('username')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('email') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit E-mail veld is een ONBEVEILIGDE TEST!</span>
                            <input name="email" type="email" value="{{old('email') ? old('email') : ''}}">
                                @error('email')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('password') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit wachtwoord veld is een ONBEVEILIGDE TEST!</span>
                            <input name="password" type="password" value="{{old('password') ? old('password') : ''}}">
                                @error('password')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('password_confirmation') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit wachtwoord veld is een ONBEVEILIGDE TEST!</span>
                            <input name="password_confirmation" type="password" value="{{old('password_confirmation') ? old('password_confirmation') : ''}}">
                                @error('password_confirmation')<p class="red-text">{{$message}}</p>@enderror
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
