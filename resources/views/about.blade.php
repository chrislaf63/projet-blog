<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute left-80 top-0 max-w-[1300px]" src="/photos/img3.jpg"/>
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            @include('layouts.front.header')

            <main class="mt-6">

                <div
                    id="docs-card"
                    class=" flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-600/90 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                >
                    <p>Ce blog a été réalisé au cours de la formation Développeur web et web mobile de Simplon.</p>
                    <p>Il a été l'objet d'un exercice de découverte de Laravel V11.2</p>
                    <p>Ce fut un bon projet pour découvrir ce framework</p>
                    <p class="text-xl">{{$content}}</p>
                </div>
            </main>

        </div>
    </div>
</div>
@include('layouts.front.footer')
</body>
</html>
