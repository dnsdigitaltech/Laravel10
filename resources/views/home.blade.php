<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <style>
            .even{
                background-color: rgb(122, 109, 109)
            }
            .odd{
                background-color: #f4f4f4
            }
        </style>
        <div>
            <h2>Home {{$data}}</h2>
            @if(true)
                teste
            @endif
            @foreach ($users as $user)
            
                <li class="{{$loop->even ? 'even' : 'odd' }}">{{$user->name}}</li>
            @endforeach
            @php
                $name = 'davi'
            @endphp
            @unless ($name === 'João')
                teste
            @endunless
        </div>
    </body>
</html>
