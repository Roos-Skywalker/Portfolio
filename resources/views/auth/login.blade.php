@extends('layout')
@section('content')
    <main>
        <h1>Accounts</h1>
        <span class="span">
        <h2>Log in</h2>
            <form method="POST" action="{{route('login')}}">
            @csrf
                <table>
                    <tr>
                        <th>E-mail</th>
                        <th>Wachtwoord</th>
                    </tr>
                    <tr>
                        <td class="tooltip @error('email') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit E-mail veld is een ONBEVEILIGDE TEST!</span>
                            <input name="email" type="text" value="{{old('email') ? old('email') : ''}}">
                                @error('email')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('password') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Dit wachtwoord veld is een ONBEVEILIGDE TEST!</span>
                            <input name="password" type="password" value="{{old('password') ? old('password') : ''}}">
                                @error('password')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                    </tr>
                </table>
                <button type="submit">Inloggen</button>
            </form>
                <a href="{{route('assignments.index')}}">
                    <button>Annuleren</button>
                </a>
                <br>
                <a href="{{route('register')}}">
                    <button>Registreer</button>
                </a>
        </span>
    </main>
@endsection
