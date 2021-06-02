@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

            @include('assessment.sidebar')

            <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">

                <div class="px-4 md:px-0">
                    <div class="mb-12 md:flex md:items-center md:justify-between">
                        <div class="flex-1 min-w-0">
                            <h3 class="text-2xl leading-6 font-bold text-gray-900">
                                {{ $categories->first()->services->first()->title }}
                            </h3>
                            <p class="mt-1 max-w-3xl text-lg text-gray-500">
                                {{ $categories->first()->services->first()->description }}
                            </p>

                        </div>
                    </div>
                </div>

                @foreach($categories->first()->services->first()->topics as $topic)
                    <section aria-labelledby="">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h2 id="payment_details_heading"
                                        class="text-lg leading-6 font-medium text-gray-900">{{ $topic->title }}</h2>

                                    @if($topic->explanation)
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ $topic->explanation }}
                                        </p>
                                    @endif

                                </div>

                                <div class="mt-6">

                                    <fieldset>
                                        <legend class="sr-only">
                                            Privacy setting
                                        </legend>
                                        <div class="bg-white rounded-md -space-y-px">
                                            <!-- Checked: "bg-gray-50 border-gray-200 z-10", Not Checked: "border-gray-200" -->
                                            <label
                                                class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer">
                                                <input type="radio"
                                                       name="{{ $topic->service_slug . '_topic_' . $topic->id  }}"
                                                       value="1"
                                                       class="h-4 w-4 mt-0.5 cursor-pointer text-gray-600 border-gray-300 focus:ring-gray-500"
                                                       aria-labelledby="privacy-setting-0-label"
                                                       aria-describedby="privacy-setting-0-description">
                                                <div class="ml-3 flex flex-col">
                                                    <!-- Checked: "text-gray-900", Not Checked: "text-gray-900" -->
                                                    <span id="privacy-setting-0-label"
                                                          class="text-gray-900 block text-sm font-medium">
                                                        Yes
                                                    </span>

                                                </div>
                                            </label>

                                            <!-- Checked: "bg-gray-50 border-gray-200 z-10", Not Checked: "border-gray-200" -->
                                            <label class="border-gray-200 relative border p-4 flex cursor-pointer">
                                                <input type="radio"
                                                       name="{{ $topic->service_slug . '_topic_' . $topic->id  }}"
                                                       value="0"
                                                       class="h-4 w-4 mt-0.5 cursor-pointer text-gray-600 border-gray-300 focus:ring-gray-500"
                                                       aria-labelledby="privacy-setting-1-label"
                                                       aria-describedby="privacy-setting-1-description">
                                                <div class="ml-3 flex flex-col">
                                                    <!-- Checked: "text-gray-900", Not Checked: "text-gray-900" -->
                                                    <span id="privacy-setting-1-label"
                                                          class="text-gray-900 block text-sm font-medium">
                                                        No
                                                    </span>

                                                </div>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </section>
                @endforeach

                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">

                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4">
                        <button type="button"
                                class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Publish
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </main>

@stop
