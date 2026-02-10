<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>

</head>
<body>

<h1>Posts</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

{{--@if(session('fail'))--}}
{{--    <p style="color:red">{{ session('fail') }}</p>--}}
{{--@endif--}}


<a href="{{ route('post.create') }}">Create New Post</a>

<table border="1" cellpadding="10" style="margin-top: 10px;">
    <thead>
    <tr>
        <th>ID</th>
        <th>title</th>
        <th>author</th>
        <th>body</th>
        <th>published</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>
                <a href="{{ route('post.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </td>

            <td>{{ $post->author }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->published }}</td>

            <td>
                <a href="{{ route('post.edit', $post->id) }}" style="display:inline-block;">
                    <button type="submit" class="btn-primary btn-sm">Edit</button>
                </a>

                <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure, this cannot be reversed?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $posts->links('pagination::simple-default') }}

</body>
</html>
