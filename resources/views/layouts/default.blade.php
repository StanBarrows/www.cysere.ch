<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._seo', ['seo' => seo()])

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/24d14dff7f.js" crossorigin="anonymous"></script>

    @livewireStyles

</head>
<body class="bg-gray-50">

{{-- @include('layouts.partials._navigation')--}}

@yield('content')
@include('layouts.partials._footer')


<script src="{{ mix('js/app.js')}}"></script>

@if(app()->isProduction())
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://dragonfly.codebar.ch/script.js" data-site="WLUVVPIV" defer></script>
    <!-- / Fathom -->
@endif
@livewireScripts
</body>
</html>
