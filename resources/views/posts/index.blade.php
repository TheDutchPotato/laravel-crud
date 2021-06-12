<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach($posts as $post)
        <article class=mb-4>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-3">
        <h2 class="text=xl font-bold text-gray-900">{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
    <form action="/posts/{{$post->id}}/edit">
    @csrf
    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Edit</button>
    </form>
    <form method="POST" action="/posts/{{$post->id}}/delete">
    @csrf
    <button class="bg-red-700 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Delete</button>
    </form>
    </article>
    @endforeach
    <form action="/posts/create">
    @csrf
    <button class="bg-green-800 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Create</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
