<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.front.head')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 h-screen">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-evenly selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @include('layouts.front.header')

                    <main class="mt-6">
                        <div class="grid">
                            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 text-black">
                                <p>{{$content}}</p>
                            </div>
                        </div>
                    </main>

                   @include('layouts.front.footer')
                </div>
            </div>
        </div>
    </body>
</html>
