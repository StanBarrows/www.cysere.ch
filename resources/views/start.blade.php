@extends('layouts.default')

@section('content')
    <div class="mt-12">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-blue-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixqx=iwvaTs7dwd&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
                <div class="absolute inset-0 bg-blue-800" style="mix-blend-mode: multiply;" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">CySeRe</h1>
                <p class="mt-6 text-xl text-blue-100 max-w-3xl">
                    I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.
                </p>
            </div>
        </div>


    @if(!empty($categories) && $categories->count())
            @foreach($categories as $category)
                <div class="bg-white pt-8-20 px-4 sm:px-6 lg:pt-6 lg:pb-14 lg:px-8 mt-12 mb-12">
                    <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                        <div>
                            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                                {{ $category->title }}
                            </h2>
                            <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-1 lg:gap-5 lg:items-center">
                                <p class="text-xl text-gray-500">
                                    {{ $category->description }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                            @foreach($category->services as $service)
                                <div>
                                    <p class="text-sm text-gray-500">
                                        <time datetime="2020-03-16">{{ $service->published_at->diffForHumans() }}</time>
                                    </p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-gray-900">
                                            {{ $service->title }}
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            {{ $service->description }}
                                        </p>
                                    </a>
                                    <div class="mt-3">
                                        <a href="{{ route('services.show', $service) }}"
                                           class="text-base font-semibold text-blue-600 hover:text-blue-500">
                                            Read more
                                        </a>
                                    </div>

                        {{--            <div class="mt-6 flex items-center">
                                        @foreach($service->authors as $author)
                                            <div class="flex-shrink-0 mr-3">
                                                <span title="{{ $author }}">
                                                    <span class="sr-only">{{ $author }}</span>
                                                    <img class="h-10 w-10 rounded-full" src="{{ gravatar($author) }}"
                                                         alt="{{ $author }}">
                                                </span>

                                            </div>
                                        @endforeach
                                    </div>--}}

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    </div>
@stop
