<x-app-layout>

<body class="bg-gray-600 text-blue-50">
<h1 class="text-2xl text-center text-gray-300 pt-8">Gestion des utilisateurs</h1>
<div class="mt-5">
    <div class=" flex flex-col items-center">
        @foreach ($users as $user)
            <div class="my-3 bg-white text-black w-1/4 px-3 pt-3 rounded-lg">
                <div class="">
                    <div>
                        <h5 class="text-xl font-semibold text-center"><strong>Username</strong> : {{ $user->name }}</h5>
                    </div>
                    <div class="pb-2">
                        <p class="card-text text-center"><strong>Id</strong> : {{ $user->id }}</p>
                    </div>
                    <div class="card-body">
                        <p class="text-lg italic text-center"><strong>Email</strong> : {{ $user->email }}</p>
                    </div>

                    <div>
                        <p class="text-center"><strong>Vérifié le</strong> : {{ $user->email_verified_at }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-center"><strong>Rôle</strong> : {{ $user->role }}</p>
                    </div>
                    <div class="flex justify-center">
                        <div class="mt-2.5">
                            <a href="{{ route('user.edit', $user->id) }}"><button
                                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-base px-5 py-2 text-center me-2 mb-2 dark:focus:ring-yellow-900">Edit</button></a>
                        </div>
                        <div class="mt-2.5">
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
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
</body>
</x-app-layout>
