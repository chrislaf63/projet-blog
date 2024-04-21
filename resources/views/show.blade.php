<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<body class="font-sans antialiased dark:bg-black dark:text-white/50 z-0 ">
@include('layouts.front.header')
<main class="mt-24">
<div class="w-screen flex justify-center">
    <div class=" w-3/4 bg-gray-800 border-solid border-2 border-800 pb-5">
        <div>
            <h1 class="text-4xl text-center font-bold py-4">{{$post->title}}</h1>
        </div>
        <div class="w-4/12 m-auto ">
            <img src="/photos/{{$post->image}}" alt="image d'illustration" width="100%">
        </div>
        <div>
            <p class="pl-5 py-4">Créé le {{$post->created_at}} par <i>{{$post->user?->name}}</i></p>
            <p class="text-2xl ml-10">{{ $post->description }}</p>
        </div>
        <div>
            <p class="p-5">{{ $post->content }}</p>
        </div>
        <a class="ml-20 mb-10" href="{{route ('blog')}}"><button class="px-10 py-3 bg-gray-500 font-semibold text-lg rounded-lg hover:bg-gray-600">Retour au blog</button></a>
    </div>
</div>
</main>
</body>
</html>
