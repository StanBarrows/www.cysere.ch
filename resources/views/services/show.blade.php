@extends('layouts.default')

@section('content')
    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative py-16 bg-white overflow-hidden">
                <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
                    <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                        <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384"
                             fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                                         patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>
                        </svg>
                        <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404"
                             height="384" fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                                         patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
                        </svg>
                        <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384"
                             fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                                         patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>
                        </svg>
                    </div>
                </div>


                <div class="relative px-4 sm:px-6 lg:px-8">

                    <div class="text-lg max-w-prose mx-auto">
                        <h1>
                            <a href="{{ route('start.index') }}"
                               class="block text-base text-center text-blue-600 font-semibold tracking-wide uppercase">{{ $category }}</a>
                            <span
                                class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">J{{ $title }}</span>
                        </h1>
                        <p class="mt-8 text-xl text-gray-500 leading-8">{{ $description }}</p>
                    </div>
                    <div class="mt-6 prose prose-blue prose-lg text-gray-500 mx-auto">
                        {!! $body !!}

                        <span class="mt-6 relative z-0 inline-flex shadow-sm rounded-md">
                              <a href="{{route('start.index')}}"
                                 class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                <span class="sr-only">Previous</span>
                                  <!-- Heroicon name: solid/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"/>
                                </svg> <span class="mr-2">Back</span>
                              </a>
                        </span>

                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
