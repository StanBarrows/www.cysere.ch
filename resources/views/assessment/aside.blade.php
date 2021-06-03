<aside class="hidden md:block py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
    <nav class="space-y-1">

        <span class="mb-2 text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-md font-bold">
            <span class="">Topics</span>
        </span>

        @foreach($services as $service)
            @if($active->uuid === $service->uuid)
                <span
                    class="bg-blue-50 text-blue-700 hover:text-blue-700 hover:bg-blue-100 group rounded-md px-3 py-2 flex items-center text-sm font-medium"
                    aria-current="page">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-blue-500 group-hover:text-blue-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                    </svg>

                    <span class="">
                        {{ $service->title }}
                    </span>
                </span>
            @else
                <a href="{{ route('assessment.set', $service) }}"
                   class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span class="">{{ $service->title }}</span>
                </a>
            @endif
        @endforeach
    </nav>

    <nav class="space-y-1 mt-6">
        <form action="{{ route('assessment.reset') }}" method="POST">
            @csrf
            <button type="submit"
                    class="text-red-900 hover:text-red-900 hover:bg-red-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="text-red-400 group-hover:text-red-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
                <span class="">Reset Survey</span>
            </button>
        </form>
    </nav>

</aside>
