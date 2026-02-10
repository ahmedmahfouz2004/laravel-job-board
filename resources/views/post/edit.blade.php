<x-layout :title="$pageTitle">

    <h2 class="text-2xl font-bold mb-6">Edit Post</h2>

    <form action="{{ route('post.update', $post->id) }}" method="POST" class="space-y-4 max-w-xl">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Title</label>
            <input
                type="text"
                name="title"
                value="{{ old('title', $post->title) }}"
                class="w-full rounded-md border border-gray-300 px-3 py-2"
            >
        </div>

        <div>
            <label class="block font-medium">Body</label>
            <textarea
                name="body"
                rows="4"
                class="w-full rounded-md border border-gray-300 px-3 py-2"
            >{{ old('body', $post->body) }}</textarea>
        </div>

        <div>
            <label class="block font-medium">Published</label>
            <select
                name="published"
                class="w-full rounded-md border border-gray-300 px-3 py-2"
            >
                <option value="1" {{ old('published', $post->published) == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('published', $post->published) == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>

{{--        <div class="flex gap-4">--}}
{{--            <button type="submit" class="rounded-md bg-green-600 px-4 py-2 text-white hover:bg-green-500">--}}
{{--               <a href="{{ route('post.index') }}">Update</a>--}}
{{--            </button>--}}

{{--            <a href="{{ route('post.index') }}" class="rounded-md bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">--}}
{{--                Cancel--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="flex gap-4">
            <button type="submit" class="rounded-md bg-green-600 px-4 py-2 text-white hover:bg-green-500">
                Update
            </button>

            <a href="{{ route('post.index') }}" class="rounded-md bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">
                Cancel
            </a>
        </div>

    </form>

</x-layout>
