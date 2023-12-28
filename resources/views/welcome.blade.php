<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100">
            @if(session('message'))
                {{session('message')}}
            @endif
            <form action="/login" method="post">
                @csrf
                <input type="text" name="email" value="{{old('email')}}">
                <input type="text" name="password" value="{{old('password')}}">
                <button type="submit">Login</button>
            </form>
            
        </div>
    </body>
</html>
