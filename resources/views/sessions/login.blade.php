<x-layout>
    @include('_posts-header')
    <main class="container">
        <div class="d-flex justify-content-center mb-5 mt-5">
            <form method="POST" action="/login">
                <label for="email" class="form-label">Email:</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control mb-3" />
                @error('email')
                <div class="mb-3"><small id="name-error" class="form-text text-danger">{{ $message }}</small></div>
                @enderror
                <label for="password" class="form-label">Password:</label>
                <input id="password" name="password" type="password" value="" class="form-control mb-3" />
                @error('password')
                <div class="mb-3"><small id="name-error" class="form-text text-danger">{{ $message }}</small></div>
                @enderror
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main> <!-- end of main -->
    <x-subscribe-section />
</x-layout>
