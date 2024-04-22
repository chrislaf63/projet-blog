<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.front.head')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 z-0 h-screen  ">
    <img id="background" class="absolute left-80 top-0 max-w-[1300px]" src="/photos/img3.jpg" />
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

            <div class="relative min-h-screen flex flex-col items-center justify-evenly selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @include('layouts.front.header')
                    <main class="mt-24">
                        <div class="grid mb-5">
                                @foreach ($post as $p)
                                    <div id="docs-card" class="flex flex-col mt-10 items-start gap-6 rounded-lg bg-gray-700/95 p-6 text-gray-400 h-64">
                                        <div class="flex w-[100%]">
                                            <div class="w-1/4">
                                                <img src="/photos/{{$p->image}}">
                                            </div>
                                            <div class="w-3/4 " >
                                                <div class="overflow-hidden pb-1 h-44">
                                                    <h2 class="text-2xl text-center font-bold mb-3">{{$p->title}}</h2>
                                                    <span class=" ml-6"><strong>Catégories : </strong></span>
                                                    @forelse($p->category as $category)
                                                        <span class="ml-3">{{ $category->categorie }}</span>
                                                    @empty
                                                        <span>Aucune catégorie pour ce post</span>
                                                    @endforelse

                                                    <p class="italic ml-8 mb-1.5">Posté le {{$p->created_at}} par <strong>{{$p->user?->name}}</strong></p>
                                                    <p class="font-semibold italic ml-5">{{$p->description}}</p>
                                                    <p class="p-3">{{$p->content}}</p>
                                                </div>
                                                <a href="{{ route('show', $p->id) }}"><button class="ml-3 mt-3 text-gray-100 bg-gray-500 px-4 py-1 border-gray-400 border-2 rounded-lg hover:bg-gray-600">Voir le post</button></a>

                                                </div>

                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </main>

                </div>
            </div>
        </div>
    @include('layouts.front.footer')
    </body>
</html>
