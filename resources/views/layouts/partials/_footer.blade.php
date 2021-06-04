<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <div class="px-5 py-2">
                <a rel="nofollow" href="{{ route('start.index') }}" class="text-base text-gray-500 hover:text-gray-900">
                    Start
                </a>
            </div>

            <div class="px-5 py-2">
                <a rel="nofollow" href="{{ route('team.index') }}" class="text-base text-gray-500 hover:text-gray-900">
                    Team
                </a>
            </div>

            <div class="px-5 py-2">
                <a rel="nofollow" href="{{ route('assessment.finish') }}" class="text-base text-gray-500 hover:text-gray-900">
                    Project Geiger
                </a>
            </div>

            <div class="px-5 py-2">
                <a rel="nofollow" target="_blank" href="https://app.usefathom.com/share/wluvvpiv/www.cysere.ch#/?range=last_7_days&site=78521" class="text-base text-gray-500 hover:text-gray-900">
                   Analytics
                </a>
            </div>

        </nav>
        <p class="mt-8 text-center text-base text-gray-400">
            <a rel="nofollow" href="{{ \Laravel\Nova\Nova::path() }}" rel="nofollow">&copy; {{ date('Y') }} CySeRe. All rights reserved.</a>
        </p>
    </div>
</footer>
