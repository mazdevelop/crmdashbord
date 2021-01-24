<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
{{-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet"> --}}
        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    </head>
    <body class="antialiased bg-custom-primaryOne">
        <div id="app">
            <app-component></app-component>
        </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
