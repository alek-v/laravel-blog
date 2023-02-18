<x-layout>
    @include('_posts-header')
    <main class="container">
        <div class="d-flex justify-content-center mb-5 mt-5">
            <form method="POST" action="/register">
                <label for="name" class="form-label">Name:</label>
                <input id="name" name="name" type="text" value="" class="form-control mb-3" />
                <label for="username" class="form-label">Username:</label>
                <input id="username" name="username" type="text" class="form-control mb-3" />
                <label for="email" class="form-label">Email:</label>
                <input id="email" name="email" type="email" value="" class="form-control mb-3" />
                <label for="password" class="form-label">Password:</label>
                <input id="password" name="password" type="password" value="" class="form-control mb-3" />
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main> <!-- end of main -->
    <x-subscribe-section />
</x-layout>
