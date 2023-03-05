<x-layout>
    @include('_posts-header')
    <div class="container">
        <h1>All Posts</h1>
        <table class="table">
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></td>
                    <td>Published</td>
                    <td>Edit</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
