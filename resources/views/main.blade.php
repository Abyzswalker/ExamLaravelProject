@auth
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maybelline</title>

    <link href="{{ asset('build/assets/css/styles.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<header>
    <div class="header">
        <div class="loadForm">
            <form class="form" action="{{route('load')}}" method="POST">
                @csrf
                <button class="button-50" role="button">Load</button>
            </form>
        </div>
        <div class="title">
            <h1 class="">Maybelline</h1>
        </div>
        <div class="logoutForm">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="button-50" role="button">{{ __('Log Out') }}</button>
            </form>
        </div>
    </div>
</header>
<body class="antialiased">
    <div class="grid">
        @if (isset($goods))
            @foreach($goods as $key => $value)
                <div class="row">
                    <figure>
                        <img src="{{$value['image_link']}}" alt="">
                        <figcaption>{{$value['name']}}</figcaption>
                    </figure>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>
@else
    <script>window.location = "/";</script>
@endauth







