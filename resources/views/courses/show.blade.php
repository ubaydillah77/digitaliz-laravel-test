<x-layout>
    <div class="mt-5 text-right flex justify-end gap-2">
        <a class="py-2 px-3 text-white font-semibold rounded-md bg-blue-500" href="/courses/{{ $course->id }}/edit">Edit
            Course</a>
        <form action="/courses/{{ $course->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button onclick="return confirm('Are you sure want to delete this course?')"
                class="py-2 px-3 text-white font-semibold rounded-md bg-red-500" type="submit">Delete</button>
        </form>

    </div>
    <x-card class=" text-center !bg-blue-100 mt-2">

        <h5 class="mb-2 text-4xl capitalize font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $course->title }}
        </h5>

        <p class="font-normal text-lg text-gray-700 dark:text-gray-400">
            {{ $course->description }}
        </p>
        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">
            {{ $course->duration }}
        </p>
    </x-card>

    <div class="flex justify-between items-center mt-5">
        <h2 class="text-2xl font-bold ">Course Materials</h2>
        <a class="py-2 px-3 text-white font-semibold rounded-md bg-blue-500"
            href="/materials/create/{{ $course->id }}">Add new
            Material</a>
    </div>
    @foreach ($materials as $index => $item)
        <x-card class="shadow-lg !bg-gray-100 mt-5">
            <div class="flex justify-between">
                <h2 class="font-bold text-xl">
                    {{ $index + 1 }}. {{ $item->title }}

                </h2>
                <div class="flex ml-3 gap-2">
                    <a class="text-blue-500 font-semibold" href="/materials/{{ $item->id }}/edit">Edit</a>
                    <form action="/materials/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Are you sure want to delete this materials?')"
                            class=" text-red-500 font-semibold" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            <p class="mb-3">{{ $item->description }}</p>

            <iframe class="w-full" height="380" src="{{ $item->embed_link }}">
                {{-- <iframe class="w-full" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"> --}}

            </iframe>
        </x-card>
    @endforeach


</x-layout>
