<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto Flex', sans-serif;
        }
    </style>
</head>
<body>
    <div class="w-screen h-screen relative bg-white pt-28">
        @include('components.general.h-menu')
        <div class="px-2 w-full md:container md:mx-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>