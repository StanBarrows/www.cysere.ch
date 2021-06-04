@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header title="{{ __('application/finish.title') }}" description="{{ __('application/finish.subtitle') }}" navigation="{{ __('application/finish.title') }}"></x-header>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-gray-800">
            <div class="h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="w-full h-full object-cover" src="https://project.cyber-geiger.eu/images/index/GEIGER_ecosystem.png" alt="Project GEIGER">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                <div class="md:ml-auto md:w-1/2 md:pl-10">

                    <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">
                        Project GEIGER
                    </p>
                    <p class="mt-3 text-lg text-gray-300">
                        GEIGER is an innovation project that aims to develop a solution that allows small businesses and entrepreneurs to become aware of their risks related to data protection, privacy, and cybersecurity, and get help in reducing these risks.
                    </p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a target="_blank" href="https://project.cyber-geiger.eu/index.html" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                                 Take me to GEIGER   <i class="fad fa-external-link ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>

@stop
