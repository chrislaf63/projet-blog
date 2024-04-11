@include('layouts.front.head')

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
{{--    <div class="relative min-h-screen flex flex-col items-center justify-evenly selection:bg-[#FF2D20] selection:text-white">--}}
{{--        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">--}}
            @include('layouts.front.header')

            <main class="mt-6">
                <div class="flex justify-center mb-10">
                <form method="post" action ="{{route('store')}}" class="w-96">
                    @csrf
                    @method("post")
                    <h1 class="text-center text-2xl font-semibold mb-3">Créer un nouveau post</h1>
                    <div class="flex-col">
                        <div class="mb-3 w-96">
                            <label class="block mb-1.5" for="title">Titre</label>
                            <input class="text-black w-96" type="text" name="title" id="title">
                        </div>
                        <div class="mb-3 w-96">
                            <label class="block mb-1.5" for="description">Description</label>
                            <input class="text-black w-96" type="text" name="description" id="description">
                        </div>
                        <div class="mb-3 w-96">
                            <label class="block mb-1.5" for="content">Contenu</label>
                            <textarea class="text-black w-96" name="content" id="content" rows="10"></textarea>
                        </div>
                        <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                        <input class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900" type="submit" value="Envoyer">
                    </div>
                </form>
                </div>
            </main>
            @include('layouts.front.footer')
{{--        </div>--}}
{{--    </div>--}}
</div>
</body>
