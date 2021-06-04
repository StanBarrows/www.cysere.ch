<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._seo', ['seo' => seo()])

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ config('cysere.fontawesome_url') }}" crossorigin="anonymous"></script>

    @livewireStyles

</head>
<body class="bg-gray-50">
@include('layouts.partials._banner')
@yield('content')
@include('layouts.partials._footer')

<script src="{{ mix('js/app.js')}}"></script>

@if(app()->isProduction())
    <script src="{{ config('cysere.fathom_url') }}" data-site="{{ config('cysere.fathom_id') }}" defer></script>
@endif
@livewireScripts
</body>
</html>
