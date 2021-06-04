@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header :title="$service->title" :description="$service->description" :navigation="$service->title"></x-header>

        @foreach($service->topics as $topic)
            <section>

                <div class="mt-12 mb-2">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $topic->title }}
                    </h2>

                    @if($topic->description)
                        <p class="mt-1 text-sm text-gray-500">
                            {{ $topic->description }}
                        </p>
                    @endif
                </div>

                <div class="mb-6 shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 sm:p-6">

                        <div class="mt-6">
                            <div class="prose prose-base max-w-7xl">
                                {!! $topic->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
@stop
