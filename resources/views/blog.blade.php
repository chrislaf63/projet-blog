<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<body class="font-sans antialiased dark:bg-black dark:text-white/50 z-0 ">
            @include('layouts.front.header')
            <main class="mt-24 flex mb-5">
                <div class="w-1/4">
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
                        <input class="ml-32 mt-10 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-base px-5 py-2 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Trier">
                    </form>
                </div>
                <div class="mr-20 w-3/4 ">
                    @foreach ($post as $p)
                        <div id="docs-card" class="flex flex-col mt-10 items-start gap-6 overflow-hidden rounded-lg bg-gray-800/90 p-6 text-gray-400 p-6  h-72">
                            <div class="flex w-[100%]">
                                <div class="w-1/4">
                                    <img src="/photos/{{$p->image}}" width="100%">
                                </div>
                                <div class="w-3/4">
                                    <div class="overflow-hidden h-52">
                                        <h2 class="text-2xl text-center font-bold mb-3">{{$p->title}}</h2>
                                        <span class=" ml-6 text-gray-500"><strong>Catégories : </strong></span>
                                        @forelse($p->category as $category)
                                            <span class="ml-3">{{ $category->categorie }}</span>
                                        @empty
                                            <span>Aucune catégorie pour ce post</span>
                                        @endforelse

                                        <p class="italic ml-8 mb-2">Posté le {{$p->created_at}} par <strong>{{$p->user?->name}}</strong></p>
                                        <p class="font-semibold italic ml-5 text-gray-500">{{$p->description}}</p>
                                        <p class="p-3.5">{{$p->content}}</p>
                                    </div>
                                    <a href="{{ route('show', $p->slug) }}"><button class="ml-3 mt-3 text-gray-100 bg-gray-500 px-4 py-1 border-gray-400 border-2 rounded-lg hover:bg-gray-600">Voir le post</button></a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

            </main>
            <div class="mr-20"">
            {{ $post->withQueryString()->links() }}
            </div>
            @include('layouts.front.footer')

</body>
</html>
