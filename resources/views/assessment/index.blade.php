@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header :title="$active->title" :description="$active->description" :navigation="$active->title"></x-header>

        <div class="">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

                @include('assessment.aside')

                <div class="mt-6 md:mt-0 space-y-6 sm:px-6 lg:px-0 lg:col-span-9">


                    @if(!empty($topics) && $topics->count())
                        @include('assessment.partials.results')
                    @else
                        @include('assessment.partials.options')
                    @endif
                </div>
            </div>
        </div>
    </main>
@stop
