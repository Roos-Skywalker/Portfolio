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
                        <td>
                            <input name="blok" class="@error('blok') red-border @enderror" value="{{old('blok') ? old('blok') : ''}}">
                                @error('blok')<br>{{$message}}@enderror
                        </td>
                        <td>
                            <input name="cursus" class="@error('cursus') red-border @enderror" value="{{old('cursus') ? old('cursus') : ''}}">
                                @error('cursus')<br>{{$message}}@enderror
                        </td>
                        <td class="tooltip">
                            <span class="tooltiptext">Optioneel<br><br>Niet elke cursus heeft toets.</span>
                            *<input name="toets" class="@error('toets') red-border @enderror" value="{{old('toets') ? old('toets') : ''}}">
                                @error('toets')<br>{{$message}}@enderror
                        </td>
                        <td>
                            <input name="weging" class="@error('weging') red-border @enderror" value="{{old('weging') ? old('weging') : ''}}">%
                                @error('weging')<br>{{$message}}@enderror
                        </td>
                        <td class="tooltip">
                            <span class="tooltiptext">Optioneel<br><br>Cursussen zonder toets geven geen studiepunten. Laat leeg als er geen toets is.</span>
                            *<input name="ec" class="@error('ec') red-border @enderror" value="{{old('ec') ? old('ec') : ''}}">
                                @error('ec')<br>{{$message}}@enderror
                        </td>
                        <td class="tooltip">
                            <span class="tooltiptext">Optioneel<br><br>Laat leeg als je de toets nog niet hebt gedaan of als er geen toets is.</span>
                            *<input name="cijfer" class="@error('cijfer') red-border @enderror" value="{{old('cijfer') ? old('cijfer') : ''}}">
                                @error('cijfer')<br>{{$message}}@enderror
                        </td>
                    </tr>
                </table>
                <button type="submit">Save changes</button>
            </form>
                <a href="{{route('assignments.index')}}">
                    <button>Cancel</button>
                </a>
        </span>
    </main>
@endsection
