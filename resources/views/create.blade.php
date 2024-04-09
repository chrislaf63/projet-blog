@include('layouts.front.head')

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
{{--    <div class="relative min-h-screen flex flex-col items-center justify-evenly selection:bg-[#FF2D20] selection:text-white">--}}
{{--        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">--}}
            @include('layouts.front.header')
            <main class="mt-6">
                <div class="flex justify-center mb-10">
                <form method="post" action ="{{ route('dashboard.store') }}" class="w-32">
                    @csrf
                    @method("post")
                    <h1 class="text-center mb-50">Créer un nouveau post</h1>
                    <div class="flex-col">
                        <div class="my-10 w-200">
                            <label class="block my-10" for="title">Titre</label>
                            <input class="text-black w-32" type="text" name="title" id="title">
                        </div>
                        <div>
                            <label class="block" for="description">Description</label>
                            <input class="text-black w-32" type="text" name="description" id="description">
                        </div>
                        <div>
                            <label class="block" for="content">Contenu</label>
                            <textarea class="text-black w-32" name="content" id="content"></textarea>
                        </div>
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
                </div>
            </main>
            @include('layouts.front.footer')
{{--        </div>--}}
{{--    </div>--}}
</div>
</body>
