<aside class="hidden md:block py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
    <nav class="space-y-1">

        <span
            class="mb-2 text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-md font-bold">
            <span class="">Topics</span>
        </span>

        @foreach($services as $service)

            <a href="{{ route('assessment.set', $service) }}"
               class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium @if($active->uuid === $service->uuid)bg-gray-200 hover:bg-gray-100 @endif">

                @if(in_array($service->uuid, $completed))
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-green-400 group-hover:text-green-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-red-400 group-hover:text-red-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                @endif

                <span class="">{{ $service->title }}</span>
            </a>
        @endforeach
    </nav>

    <nav class="space-y-1 mt-6">

        <a href="{{ route('assessment.reset') }}"
           class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
            <span class="">Reset Survey</span>
        </a>
        <a href="{{ route('assessment.finish') }}"
           class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>

            <span class="">Finish Survey</span>
        </a>

    </nav>

</aside>
