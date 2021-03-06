@extends('layout')


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="code">
            @yield('code')
            @yield('message')
        </div>

        <div class="message" style="padding: 10px;">
            <br>
            @yield('details')
            <br>
            You can help us improve the site by contacting support 😉
            <br>
            <a href="mailto:SiteAdmin@exampleMail.com?subject=Error report"><button type="submit">Support</button></a>
{{--            Back button from client side, requires JS--}}
            <form action="javascript:history.back()">
                <button>Go Back</button>
            </form>
{{--            Back button from server side--}}
{{--            <a href="{{ url()->previous() }}">Back</a>--}}

{{--            <form action="{{ url()->previous() }}">--}}
{{--                <button>Go Back</button>--}}
{{--            </form>--}}
        </div>
    </div>
@endsection


@push('css')
    <style>
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }
    </style>
@endpush
