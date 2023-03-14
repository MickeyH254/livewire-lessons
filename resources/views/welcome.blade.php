<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">

        @livewireStyles
    </head>
    <body>
        <livewire:hello-world :name="'Chico'" />

        @livewireScripts

    </body>
</html>
