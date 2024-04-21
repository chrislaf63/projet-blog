<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<body class="font-sans antialiased dark:bg-black dark:text-white/50 z-0 ">
            @include('layouts.front.header')
            <main class="mt-24 flex mb-5">
                <div class="w-2/5">
                    <form method="get" action="{{route('blog')}}">
                        @csrf
                        @method("get")
                        <fieldset class="">
                            <legend class="pl-14 text-3xl mb-4">Trier par catégories</legend>
                            <div class="pl-24 text-2xl">
                                <input type="radio" id="all" name="categories" value="all">
                                <label for="all">Toutes</label>
                            </div>
                        @if (!empty($categories) && count($categories) > 0)
                            @foreach ($categories as $category)
                                <div class="pl-24 text-2xl">
                                <input type="radio" id="cat-{{ $category->id }}" name="categories" value="{{ $category->id }}">
                                <label for="cat-{{ $category->id }}">{{ $category->categorie }}</label>
                                </div>
                            @endforeach
                        @endif
                        </fieldset>
                        <input class="ml-32 mt-10 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Trier">
                    </form>
                </div>
                <div class="mr-20">
                    @foreach ($post as $p)
                        <div id="docs-card" class="flex flex-col mt-10 items-start gap-6 overflow-hidden rounded-lg bg-white p-6 text-black">
                            <div class="flex ">
                                <div class="w-1/4">
                                    <img src="/photos/{{$p->image}}">
                                </div>
                                <div class="w-3/4">
                                    <h2 class="text-2xl text-center font-bold mb-3">{{$p->title}}</h2>
                                    <span class=" ml-6"><strong>Catégories : </strong></span>
                                    @forelse($p->category as $category)
                                        <span class="ml-3">{{ $category->categorie }}</span>
                                    @empty
                                        <span>Aucune catégorie pour ce post</span>
                                    @endforelse

                                    <p class="italic ml-8 mb-2">Posté le {{$p->created_at}} par <strong>{{$p->user?->name}}</strong></p>

                                    <p class="font-semibold italic ml-5">{{$p->description}}</p>
                                    <p class="p-3.5">{{$p->content}}</p>
                                    <a href="{{ route('show', $p->id) }}"><button class="ml-3 bg-gray-200 px-4 py-1 round-sm hover:bg-gray-300">Voir le post</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </main>
            {{ $post->withQueryString()-> links() }}
            @include('layouts.front.footer')

</body>
</html>
