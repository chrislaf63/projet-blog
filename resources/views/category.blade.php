@include('layouts.front.head')
<body class="bg-gray-600 text-blue-50">
@include('layouts.front.header')
<div class="mt-5">
    <div class=" flex flex-col items-center">
        <form method="post" action ="{{route('newcat')}}" class="w-96">
            @csrf
            @method("post")
            <h1 class="text-center text-2xl font-semibold mb-3">Créer une nouvelle catégorie</h1>
            <div class="flex-col">
                <div class="mb-3 w-96">
                    <label class="block mb-1.5" for="categories">Créer une nouvelle catégorie</label>
                    <input class="text-black w-96" type="text" name="categories" id="categories">
                </div>
                <input class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Envoyer">
            </div>
        </form>
        @foreach ($category as $cat)
            <div class="my-3 bg-white text-black w-1/2 px-3 pt-3 rounded-lg">

                <div class="">
                    <h5>{{ $cat->categories }}</h5>
                    <div class="flex justify-around">
                        <div class="mt-4">
                            <a href="{{ route('category.edit', $cat->id) }}"
                               class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                        </div>
                        <div class="mt-2.5">
                            <form action="{{ route('category.destroy', $cat->id) }}" method="post">
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
