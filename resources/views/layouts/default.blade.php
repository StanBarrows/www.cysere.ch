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

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-red-600">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="pr-16 sm:text-center sm:px-16">
            <p class="font-medium text-white">
        <span class="n">
         We're currently working on the content of this website. Please do not take any information seriously!
        </span>
            </p>
        </div>

    </div>
</div>


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
