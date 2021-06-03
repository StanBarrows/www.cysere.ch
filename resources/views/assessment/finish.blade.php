@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header title="Finish"
                  description="Sugar plum icing chupa chups tootsie roll donut. Caramels pie ice cream pastry sweet. Cookie jelly beans marshmallow chocolate powder soufflé."
                  navigation="Finish"></x-header>

        <div class="">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gray-200">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 md:text-4xl">
                        <span class="block">Ready to dive in?</span>
                        <span class="block text-gray-600">Start your free trial today.</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('start.index') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </main>

@stop
