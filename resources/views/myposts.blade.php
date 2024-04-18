<x-app-layout>

<body class="bg-gray-600 text-blue-50">
{{--@include('layouts.front.header')--}}
<div class="mt-5">
    <div class=" flex flex-col items-center">
        @foreach ($posts as $post)
            <div class="my-3 bg-white text-black w-1/2 px-3 pt-3 rounded-lg">
                <div class="">
                    <div class="card-body">
                        <span class="text-lg italic">Categories : </span>
                        @forelse($post->category as $category)
                            <span class="text-lg italic">{{ $category->categorie }}</span>
                        @empty
                            <span>Aucune catégorie pour ce post</span>
                        @endforelse
                    </div>
                    <div>
                        <h5 class="text-xl font-semibold">{{ $post->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-lg italic">{{ $post->description }}</p>
                    </div>
                    <div class="pb-2">
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div>
                        <p>Auteur : {{ $post->user->name }}</p>
                    </div>
                        <div class="flex justify-around">
                            <div class="mt-4">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                   class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                            </div>
                            <div class="mt-2.5">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</x-app-layout>
