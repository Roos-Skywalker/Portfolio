@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span class="span">
        <h2>Maak een nieuw vak</h2>
            <form method="POST" action="{{route('assignments.index')}}">
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
                        <td class="@error('blok') red-border @enderror">
                            <input name="blok" value="{{old('blok') ? old('blok') : ''}}">
                                @error('blok')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="@error('cursus') red-border @enderror">
                            <input name="cursus" value="{{old('cursus') ? old('cursus') : ''}}">
                                @error('cursus')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('toets') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br><br>Niet elke cursus heeft toets.</span>
                            *<input name="toets" value="{{old('toets') ? old('toets') : ''}}">
                                @error('toets')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="@error('weging') red-border @enderror">
                            <input name="weging" value="{{old('weging') ? old('weging') : ''}}">%
                                @error('weging')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('ec') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br><br>Cursussen zonder toets geven geen studiepunten. Laat leeg als er geen toets is.</span>
                            *<input name="ec" value="{{old('ec') ? old('ec') : ''}}">
                                @error('ec')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('cijfer') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br><br>Laat leeg als je de toets nog niet hebt gedaan of als er geen toets is.</span>
                            *<input name="cijfer" value="{{old('cijfer') ? old('cijfer') : ''}}">
                                @error('cijfer')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                    </tr>
                </table>
                <button type="submit">Opslaan</button>
            </form>
                <a href="{{route('assignments.index')}}">
                    <button>Annuleren</button>
                </a>
        </span>
    </main>
@endsection
