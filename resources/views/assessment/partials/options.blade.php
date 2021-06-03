<form action="{{ route('assessment.check') }}" method="POST">
    @csrf

    @foreach($active->topics as $topic)
        <section aria-labelledby="">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h2 id="payment_details_heading"
                            class="text-lg leading-6 font-medium text-gray-900">
                            {{ $topic->title }}
                        </h2>

                        @if($topic->explanation)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $topic->explanation }}
                            </p>
                        @endif
                    </div>

                    <div class="">
                        <fieldset>
                            <legend class="sr-only">
                                {{ $topic->title }}
                            </legend>
                            <div class="bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-gray-50 border-gray-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer">
                                    <input type="radio"
                                           id="{{ $topic->uuid }}"
                                           name="{{ $topic->uuid }}"
                                           value="1"
                                           class="h-4 w-4 mt-0.5 cursor-pointer text-gray-600 border-gray-300 focus:ring-gray-500"
                                           aria-labelledby="privacy-setting-0-label"
                                           aria-describedby="privacy-setting-0-description"
                                           required>
                                    <div class="ml-3 flex flex-col">
                                        <!-- Checked: "text-gray-900", Not Checked: "text-gray-900" -->
                                        <span id="privacy-setting-0-label"
                                              class="text-gray-900 block text-sm font-medium">
                                                            Yes
                                                        </span>

                                    </div>
                                </label>

                                <!-- Checked: "bg-gray-50 border-gray-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex cursor-pointer">
                                    <input
                                        type="radio"
                                        id="{{ $topic->uuid }}"
                                        name="{{ $topic->uuid }}"
                                        value="0"
                                        class="h-4 w-4 mt-0.5 cursor-pointer text-gray-600 border-gray-300 focus:ring-gray-500"
                                        aria-labelledby="privacy-setting-1-label"
                                        aria-describedby="privacy-setting-1-description">
                                    <div class="ml-3 flex flex-col">

                                                    <span id="privacy-setting-1-label"
                                                          class="text-gray-900 block text-sm font-medium">
                                                        No
                                                    </span>

                                    </div>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <div class="flex justify-end">
        <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Check
        </button>
    </div>

</form>
