@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header title="{{ __('application/checklist.title') }}" description="{{ __('application/checklist.subtitle') }}" navigation="{{ __('application/checklist.title') }}"></x-header>

        <div class="">
            @if (flash()->message)
                @include('checklist.partials.alerts')
            @endif

            <form action="{{ route('checklist.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                        @foreach($categories as $category)
                            <fieldset>
                                <legend class="text-lg font-medium text-gray-900">{{ $category->title }}</legend>
                                <div class="my-4 space-y-4">
                                    @foreach($category->services()->orderBy('order')->get() as $service)
                                        <div class="flex items-start">


                                            <div class="h-6 flex items-center">

                                                @if($service->published)
                                                    <input id="{{ $service->uuid }}" name="{{ $service->uuid }}" type="checkbox" class="focus:ring-green-500 h-5 w-5 text-green-600 border-gray-300 rounded">
                                                @else
                                                    <input id="{{ $service->uuid }}" name="{{ $service->uuid }}" type="checkbox" class="cursor-not-allowed focus:ring-green-500 h-5 w-5 text-green-600 border-gray-300 rounded" disabled readonly>
                                                @endif

                                            </div>
                                            <div class="ml-3 text-base">
                                                @if($service->published)

                                                    <label for="{{ $service->uuid }}" class="font-medium text-gray-700">{{ $service->title }}</label>

                                                    <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        {{ __('application/checklist.online') }}
                                                    </span>
                                                @else
                                                    <label for="{{ $service->uuid }}" class="cursor-not-allowed font-medium text-gray-700">{{ $service->title }}</label>

                                                    <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                        {{ __('application/checklist.coming_soon') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-green-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                        {{ __('application/checklist.button') }}
                    </button>
                </div>
            </form>

        </div>
    </main>

@stop
