<x-app-layout>
    <div class="mt-5" style="background-image:url('/photos/img1')">
        <div class="flex flex-col items-center mb-5">
            <form method="post" action ="{{route('newcat')}}" class="w-96">
                @csrf
                @method("post")
                <h1 class="text-center text-2xl font-semibold mb-3 pt-6 text-gray-300">Créer une nouvelle catégorie</h1>
                <div class="flex-col ">
                    <div class="mb-2 w-96">
                        <label class="block mb-1.5" for="categories">Créer une nouvelle catégorie</label>
                        <input class="text-black w-96" type="text" name="categorie" id="categories">
                    </div>
                    <input class="text-white mt-6 bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-base px-5 py-2 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Envoyer">
                </div>
            </form>
            @foreach ($category as $cat)
                <div class="my-3 bg-white text-black w-1/4 px-3 mt-5 rounded-lg">

                    <div class="">
                        <h5 class="text-center font-extrabold text-2xl">{{ $cat->categorie }}</h5>
                        <div class="flex justify-around">
                            <div class="mt-2.5">
                                <a href="{{ route('category.edit', $cat->id) }}"><button
                                        class="text-white bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-base px-5 py-2 text-center me-2 mb-2 dark:focus:ring-yellow-900">Edit</button></a>
                            </div>
                            <div class="mt-2.5">
                                <form action="{{ route('category.destroy', $cat->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-5 py-2 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
