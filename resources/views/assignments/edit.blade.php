@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span class="span">
        <h2>Bewerk een vak</h2>
            <p>* = optioneel</p>
{{--Basic error display, shows all errors--}}
{{--             @if(count($errors) > 0)--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--            @endif--}}

{{--Specific error display, only shows errors associated with the variable in get()--}}
{{--            @if(count($errors) > 0)--}}
{{--                    @foreach($errors->get('blok') as $message)--}}
{{--                        <p>{{$message}}</p>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                <td><input name="blok" value="{{$assignment->blok}}"></td>--}}
{{--            @endif--}}

            <form method="POST" action="{{route('assignments.index')}}/{{$assignment->id}}">
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
                        <td class="tooltip @error('blok') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Kies een getal tussen 1 en 4.</span>
                            <input name="blok" value="{{old('blok') ? old('blok') : $assignment->blok}}">
                                @error('blok')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('cursus') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Je kunt het alfabet, getallen en spaties gebruiken en maximaal 40 tekens lang.</span>
                            <input name="cursus" value="{{old('cursus') ? old('cursus') : $assignment->cursus}}">
                                @error('cursus')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('toets') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br>
                                <br>Je kunt het alfabet, getallen en spaties gebruiken en maximaal 40 tekens lang.<br>
                                    <br>Laat leeg als de cursus geen studiepunten (EC) geeft.</span>
                            *<input name="toets" value="{{old('toets') ? old('toets') : $assignment->toets}}">
                                @error('toets')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('weging') red-border @enderror">
                            <span class="tooltiptext">Verplicht<br>
                                <br>Kies een getal tussen 0 en 100.</span>
                            <input name="weging" value="{{old('weging') ? old('weging') : $assignment->weging}}">%
                                @error('weging')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('ec') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br>
                                <br>Een vak geeft tussen de 0 en 20 studiepunten (EC) en gebruik punt (.) notatie alsjeblieft. Bijvoorbeeld 17.5<br>
                                    <br>Laat leeg als er geen toets is.</span>
                            *<input name="ec" value="{{old('ec') ? old('ec') : $assignment->ec}}">
                                @error('ec')<p class="red-text">{{$message}}</p>@enderror
                        </td>
                        <td class="tooltip @error('cijfer') red-border @enderror">
                            <span class="tooltiptext">Optioneel<br>
                                <br>Het cijfer is tussen een 1 en 10, gebruik punt (.) notatie voor cijfers. Bijvoorbeeld 7.8<br>
                                    <br>Laat leeg als je de toets nog niet hebt gedaan of als er geen toets is.</span>
                            *<input name="cijfer" value="{{old('cijfer') ? old('cijfer') : $assignment->cijfer}}">
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
