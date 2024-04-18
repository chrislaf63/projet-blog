<x-app-layout>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

    <main>
        <div class="flex justify-center">
            <form method="post" action="{{ route('user.update', $user->id) }}" class="w-96">
                @csrf
                @method("PUT")
                <h1 class="text-center text-2xl font-semibold my-5">Modifier un utilisateur</h1>
                <div class="flex-col">

                    <div class="mb-3 w-96">
                        <label class="block mb-1.5" for="username">Username</label>
                        <input class="text-black w-96" type="text" name="name" id="username" value="{{$user->name}}" readonly>
                    </div>
                    <div class="mb-3 w-96">
                        <label class="block mb-1.5" for="email">Email</label>
                        <input class="text-black w-96" type="text" name="email" id="email" value="{{$user->email}}" readonly>
                    </div>
                    <div class="mb-3 w-96 ">
                        <label class="block mb-1.5" for="role">Rôle</label>
                        <select class="text-black" name="role" id="role">
                            <option selected value="{{ $user->role }}"> {{ $user->role }} </option>
                            <option value="administrator">Administrateur</option>
                            <option value="user">Utilisateur</option>
                        </select>
                    </div>

                    <input
                        class=" mt-8 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 cursor-pointer dark:focus:ring-purple-900"
                        type="submit" value="Modifier">
                </div>
            </form>
        </div>
    </main>
    @include('layouts.front.footer')
</div>
</body>
</x-app-layout>
