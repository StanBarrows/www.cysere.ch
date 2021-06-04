@extends('layouts.default')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-header title="{{ __('application/team.title') }}" description="{{ __('application/team.subtitle') }}" navigation="{{ __('application/team.title') }}"></x-header>

        <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">

            <ul class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">

                @foreach($users as $user)
                    <li>
                        <div class="space-y-6">
                            <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56"
                                 src="{{ $user->getGravatar() . '?s=250&d=mm'}}"
                                 alt="{{ $user->name }}">
                            <div class="space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>{{ $user->name }} </h3>
                                </div>
                                <ul class="flex justify-center space-x-5">

                                    @if($user->email)
                                        <li>
                                            <a rel="nofollow" target="_blank" href="mailto:{{ $user->email }}"
                                               class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">E-Mail</span>
                                                <i class="fad fa-envelope fa-lg w-5 h-5"></i>

                                            </a>
                                        </li>
                                    @endif
                                    @if($user->linked_in)
                                        <li>
                                            <a rel="nofollow" target="_blank" href="{{ $user->linked_in }}"
                                               class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <i class="fab fa-linkedin fa-lg w-5 h-5"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if($user->twitter)
                                        <li>
                                            <a rel="nofollow" target="_blank" href="{{ $user->twitter }}"
                                               class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <i class="fab fa-twitter fa-lg w-5 h-5"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if($user->github)
                                        <li>
                                            <a rel="nofollow" target="_blank" href="{{ $user->github }}"
                                               class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Github</span>
                                                <i class="fab fa-github fa-lg w-5 h-5"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>


    </main>
@stop
