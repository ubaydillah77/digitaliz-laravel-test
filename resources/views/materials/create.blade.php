@php
    // Using the request helper
    $id = request()->segment(3);
@endphp

<x-layout>

    <h1 class="text-3xl font-semibold text-center mt-20">
        Create new material
    </h1>
    <x-card class="max-w-sm mx-auto mt-5">
        <form action='/materials' method="POST">
            @csrf
            <input type="hidden" name="course_id" value="{{ $id }}">
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    Title</label>
                <input type="title" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="embed_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    embed_link</label>
                <input type="embed_link" id="embed_link" name="embed_link"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                @error('duration')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    Description</label>
                <textarea class="border w-full p-2" rows="4" name="description"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                Submit
            </button>
            <a href="/" class="text-black ml-4"> Back </a>
        </form>
    </x-card>


</x-layout>
