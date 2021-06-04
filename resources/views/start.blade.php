@extends('layouts.default')

@section('content')

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                     fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"/>
                </svg>

                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                             aria-label="Global">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a rel="nofollow" href="{{ route('start.index') }}">
                                        <span
                                            class="h-8 w-auto sm:h-10 font-bold text-xl">Cyber Security and Resilience</span>
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8"></div>
                        </nav>
                    </div>

                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">GDPR</span>
                            <span class="block text-gray-600 xl:inline">{{ __('application/start.title') }}</span>
                        </h1>

                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            {{ __('application/start.subtitle') }}
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a rel="nofollow" href="{{ route('checklist.index') }}"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                                    {{ __('application/start.button') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img title="Source: pexels.com" class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                 src="{{ asset('images/background.jpg') }}" alt="{{ config('app.name') }}">
        </div>
    </div>


    @foreach($categories as $category)
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="@if($loop->even)bg-white @else bg-gray-50 @endif">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        {{ $category->title }}
                    </h2>

                    @if($category->description)
                        <p class="mt-4 text-lg text-gray-500">
                            {{ $category->description  }}
                        </p>
                    @endif

                </div>
                <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-3 lg:gap-x-8">

                    @foreach($category->services()->orderBy('order')->get() as $service)
                        @if($service->published)
                            <div class="relative">
                                <dt>
                                    <p class="ml-9 text-lg leading-6 font-medium text-gray-900">{{ $service->title }}
                                        <span
                                            class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            {{ __('application/checklist.online') }}
                                        </span>
                                    </p>

                                </dt>
                                <dd class="mt-2 ml-9 text-base text-gray-500">
                                    {{ $service->description }}
                                </dd>
                                <dd class="mt-3 ml-9 text-base text-gray-500">
                                    <a rel="nofollow" href="{{ route('services.show', $service) }}"
                                       class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-200 text-gray-800">
                                        {{ __('application/start.topics.more') }}
                                    </a>
                                </dd>
                            </div>

                        @else
                            <div class="relative">
                                <dt>
                                    <p class="ml-9 text-lg leading-6 font-medium text-gray-900">{{ $service->title }}
                                        <span
                                            class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            {{ __('application/checklist.coming_soon') }}
                                        </span>
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-9 text-base text-gray-500">
                                    {{ $service->description }}
                                </dd>
                            </div>
                        @endif
                    @endforeach
                </dl>
            </div>
        </div>

    @endforeach



@stop
