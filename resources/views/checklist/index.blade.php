@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header title="Checklist"
                  description="Sugar plum icing chupa chups tootsie roll donut. Caramels pie ice cream pastry sweet. Cookie jelly beans marshmallow chocolate powder soufflé."
                  navigation="Checklist"></x-header>

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
                                    @foreach($category->services as $service)
                                        <div class="flex items-start">
                                            <div class="h-6 flex items-center">
                                                <input id="{{ $service->uuid }}" name="{{ $service->uuid }}"
                                                       type="checkbox"
                                                       class="focus:ring-green-500 h-5 w-5 text-green-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-base">
                                                <label for="{{ $service->uuid }}"
                                                       class="font-medium text-gray-700">{{ $service->title }}</label>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>

                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                            class="bg-green-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                        Proceed with the assessment
                    </button>
                </div>

            </form>

        </div>
    </main>

@stop
