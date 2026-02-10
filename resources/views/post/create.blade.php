<x-layout :title="$pageTitle">

<h1 class="text-2xl font-bold mb-6">Create New Post</h1>

<form method="POST" action="{{ route('post.store') }}" class="space-y-4 max-w-xl">
    @csrf

    <div>
        <label class="block font-medium">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"class="w-full rounded-md border border-gray-300 px-3 py-2">
        @error('title')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block font-medium">Author</label>
        <input type="text" name="author" value="{{ old('author') }}" class="w-full rounded-md border border-gray-300 px-3 py-2">
        @error('author')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block font-medium">Body</label>
        <textarea name="body" rows="5" class="w-full rounded-md border border-gray-300 px-3 py-2">
        {{ old('body') }}</textarea>
        @error('body')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block font-medium">Published</label>
        <label class="mr-4">
            <input type="radio" name="published" value="1" {{ old('published') == 1 ? 'checked' : '' }}>Yes
        </label>
        <label>
            <input type="radio" name="published" value="0" {{ old('published') == 0 ? 'checked' : '' }}>No
        </label>

        @error('published')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-500">
        Submit
    </button>
</form>

</x-layout>
