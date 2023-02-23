<x-layout>
    @include('_posts-header')
    <main class="container">
        <div class="d-flex justify-content-center mb-5 mt-5">
            <form method="POST" action="/register">
                <label for="name" class="form-label">Name:</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control mb-3" aria-describedby="name-error" />
                @error('name')
                    <div class="mb-3"><small id="name-error" class="form-text text-danger">{{ $message }}</small></div>
                @enderror
                <label for="username" class="form-label">Username:</label>
                <input id="username" name="username" type="text" value="{{ old('username') }}" class="form-control mb-3" />
                @error('username')
                    <div class="mb-3"><small id="name-error" class="form-text text-danger">{{ $message }}</small></div>
                @enderror
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

                @if ($errors->any())
                    <ul class="mt-3">
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </main> <!-- end of main -->
    <x-subscribe-section />
</x-layout>
