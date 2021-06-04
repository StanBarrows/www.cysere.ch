@foreach($topics as $topic)

    @if($topic->extended)
        <section aria-labelledby="">
            <div class="mb-6 shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h2 id="" class="text-lg leading-6 font-medium text-gray-900">
                            {{ $topic->model->title }}


                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                   Your answer <span class="font-bold ml-1"> {{ $topic->answer }}</span>
                            </span>

                        </h2>

                    </div>

                </div>
            </div>
        </section>
    @else
        <section aria-labelledby="">
            <div class="mb-6 shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h2 id=""
                            class="text-lg leading-6 font-medium text-gray-900">
                            {{ $topic->model->title }}

                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                   Your answer <span class="font-bold ml-1"> {{ $topic->answer }}</span>
                            </span>

                        </h2>

                        @if($topic->model->explanation)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $topic->model->explanation }}
                            </p>
                        @endif
                    </div>

                    <div class="mt-6">
                        <div class="prose prose-base">
                            {!! $topic->model->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endforeach

<div class="flex justify-end">

    @if($previous)
        <a href="{{ route('assessment.set', $previous) }}"
           class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Previous Topic
        </a>
    @endif

    @if($next)
        <a href="{{ route('assessment.set', $next) }}"
           class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Next Topic
        </a>
    @else

        <a href="{{ route('assessment.reset') }}"
           class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Reset survey
        </a>

        <a href="{{ route('assessment.finish') }}"
           class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Finish Survey
        </a>

    @endif

</div>
