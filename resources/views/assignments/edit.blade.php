@extends('layout')
@section('content')
    <main>
        <h1>Mijn Dashboard</h1>
        <span>
        <h2>Bewerk een vak</h2>

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
                    @if(count($errors) > 0)
                        @foreach($errors->get('blok') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}">{{$message}}</td>
                            <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                            <td><input name="toets" value="{{$assignment->toets}}"></td>
                            <td><input name="weging" value="{{$assignment->weging}}">%</td>
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                            <td><input name="ec" value="{{$assignment->cijfer}}"></td>
                        @endforeach
                    @else
                        <td><input name="blok" value="{{$assignment->blok}}"></td>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->get('cursus') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}"></td>
                            <td><input name="cursus" value="{{$assignment->cursus}}">{{$message}}</td>
                            <td><input name="toets" value="{{$assignment->toets}}"></td>
                            <td><input name="weging" value="{{$assignment->weging}}">%</td>
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                            <td><input name="ec" value="{{$assignment->cijfer}}"></td>
                        @endforeach
                    @else
                        <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->get('toets') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}"></td>
                            <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                            <td><input name="toets" value="{{$assignment->toets}}">{{$message}}</td>
                            <td><input name="weging" value="{{$assignment->weging}}">%</td>
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                            <td><input name="ec" value="{{$assignment->cijfer}}"></td>
                        @endforeach
                    @else
                        <td><input name="toets" value="{{$assignment->toets}}"></td>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->get('weging') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}"></td>
                            <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                            <td><input name="toets" value="{{$assignment->toets}}"></td>
                            <td><input name="weging" value="{{$assignment->weging}}">% {{$message}}</td>
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                            <td><input name="ec" value="{{$assignment->cijfer}}"></td>
                        @endforeach
                    @else
                        <td><input name="weging" value="{{$assignment->weging}}">%</td>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->get('ec') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}"></td>
                            <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                            <td><input name="toets" value="{{$assignment->toets}}"></td>
                            <td><input name="weging" value="{{$assignment->weging}}">%</td>
                            <td><input name="ec" value="{{$assignment->ec}}">{{$message}}</td>
                            <td><input name="ec" value="{{$assignment->cijfer}}"></td>
                        @endforeach
                    @else
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->get('cijfer') as $message)
                            <td><input name="blok" value="{{$assignment->blok}}"></td>
                            <td><input name="cursus" value="{{$assignment->cursus}}"></td>
                            <td><input name="toets" value="{{$assignment->toets}}"></td>
                            <td><input name="weging" value="{{$assignment->weging}}">%</td>
                            <td><input name="ec" value="{{$assignment->ec}}"></td>
                            <td><input name="cijfer" value="{{$assignment->cijfer}}">{{$message}}</td>
                        @endforeach
                    @else
                        <td><input name="cijfer" value="{{$assignment->cijfer}}"></td>
                    @endif
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
