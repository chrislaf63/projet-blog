@include('layouts.front.head')
<body class="bg-gray-600 text-blue-50">
@include('layouts.front.header')
<div class="mt-5">
    <div class=" flex flex-col items-center">
        <form method="post" action ="{{ route('category.update', $cat->id) }}" class="w-96">
            @csrf
            @method("PUT")
            <h1 class="text-center text-2xl font-semibold mb-3">Modifier une catégorie</h1>
            <div class="flex-col">
                <div class="mb-3 w-96">
                    <label class="block mb-1.5" for="categories">Modifier une catégorie</label>
                    <input class="text-black w-96" type="text" name="categories" id="categories" value="{{ $cat->categories }}">
                </div>
                <input class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Modifier">
            </div>
        </form>
    </div>
</div>
</body>
