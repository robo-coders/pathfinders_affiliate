<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{asset('dist/images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('theme/css/app.css') }}">

        @routes
        <script type="text/javascript">
            window.Laravel = {
                csrfToken: "{{ csrf_token() }}",
                jsPermissions: {!! auth()->check()?auth()->user()->jsPermissions():null !!}
            }
        </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('theme/js/feather.js') }}" defer></script>
        <script src="{{ asset('theme/js/dropdown.js') }}" defer></script>
        <script src="{{ asset('theme/js/modal.js') }}" defer></script>
        
    </head>
    <body class="app">
        @inertia
    </body>
</html>
