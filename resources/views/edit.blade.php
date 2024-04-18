@include('layouts.front.head')
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    @include('layouts.front.header')
    <main >
        <div class="flex justify-center mb-10 pt-24">
            <form method="post" action="{{ route('posts.update', $post->id) }}" class="w-96">
                @csrf
                @method("PUT")
                <h1 class="text-center text-2xl font-semibold mb-3">Modifier un post</h1>
                <div class="flex-col">
                    <div class="mb-3 w-96">
                        <fieldset>
                            <legend>Categories</legend>
                            @if (!empty($categories) && count($categories) > 0)
                                <div class="flex justify-evenly flex-wrap">
                                @foreach ($categories as $category)
                                    <div>
                                        <input type="checkbox" id="cat-{{ $category->id }}" name="categories[]" value="{{ $category->id }}" @if (in_array($category->id, $idCategories)) checked @endif />
                                        <label class="text-gray-300" for="cat-{{ $category->id }}">{{ $category->categorie }}</label>
                                    </div>
                                @endforeach
                                </div>
                            @endif

                        </fieldset>
                    </div>
                    <div class="mb-3 w-96">
                        <label class="block mb-1.5" for="title">Titre</label>
                        <input class="text-black w-96" type="text" name="title" id="title" value="{{$post->title}}">
                    </div>
                    <div class="mb-3 w-96">
                        <label class="block mb-1.5" for="description">Description</label>
                        <input class="text-black w-96" type="text" name="description" id="description" value="{{$post->description}}">
                    </div>
                    <div class="mb-3 w-96">
                        <label class="block mb-1.5" for="content">Contenu</label>
                        <textarea class="text-black w-96" name="content" id="content" rows="10">{{$post->content}}</textarea>
                    </div>
                    <input
                        class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900"
                        type="submit" value="Modifier">
                </div>
            </form>
        </div>
    </main>
    @include('layouts.front.footer')
</div>
</body>
