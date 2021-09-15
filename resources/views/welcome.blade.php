<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <title>Portfolio Samuel Falcón</title>
    </head>
    <body class="antialiased">
        <div id="app">
            <example-component></example-component>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
