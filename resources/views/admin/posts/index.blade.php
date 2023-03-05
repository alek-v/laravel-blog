<x-layout>
    @include('_posts-header')
    <div class="container">
        <h1>All Posts</h1>
        <table class="table">
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></td>
                    <td><a href="/admin/posts/{{ $post->id }}/edit">Edit</a></td>
                    <td>
                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-white border-0 text-muted">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
