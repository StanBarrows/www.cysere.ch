<aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
    <nav class="space-y-1">

        @foreach($categories as $category)
            <span
                class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-md font-bold">
                <span class="">{{ $category->title }}</span>
            </span>

            @foreach($category->services as $service)
            <!-- Current: "bg-gray-50 text-orange-600 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
                <span  class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <span class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-1 h-6 w-6">
                          <i class="{{ $service->icon ?? 'fad fa-unicorn' }} fa-lg"></i>
                    </span>
                    <span class="">
                        {{ $service->title }}
                    </span>
                </span>
            @endforeach
        @endforeach
    </nav>
</aside>
