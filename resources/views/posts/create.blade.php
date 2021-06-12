
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-3">
    <div style="width: 900px;" class="container max-w-full mx-auto pt-3">


    <form method="POST" action="/posts">

    @csrf

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="title">Title:</label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
            text-gray-600 text-sm focus:outline-none  focus:border-gray-400 focus:ring-0" id="title" name="title"> </input>
        
        </div>

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content">content:</label>
            <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
            text-gray-600 text-sm focus:outline-none  focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
        </div>

        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow" type="submit">create </button>
        
    </form>
    </div>
</x-app-layout>
