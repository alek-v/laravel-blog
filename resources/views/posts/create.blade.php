<x-layout>
    @include('_posts-header')
    <div class="container">
        <h1>Create a post</h1>
        <form action="/admin/posts/create" method="POST" class="mb-5 mt-5">
            <!-- title -->
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" />
            @error('title')
                <span id="passwordHelpInline" class="d-block mb-2 form-text text-danger">
                    {{ $message }}
                </span>
            @enderror

            <!-- slug -->
            <label for="slug" class="form-label">Slug</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" class="form-control" />
            @error('slug')
                <span id="passwordHelpInline" class="d-block mb-2 form-text text-danger">
                    {{ $message }}
                </span>
            @enderror

            <!-- description -->
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" rows="6" class="form-control">{{ old('description') }}</textarea>
            @error('description')
                <span id="passwordHelpInline" class="d-block mb-2 form-text text-danger">
                    {{ $message }}
                </span>
            @enderror

            <!-- text -->
            <label for="body" class="form-label">Body</label>
            <textarea id="body" name="body" rows="6" class="form-control">{{ old('body') }}</textarea>
            @error('body')
                <span id="passwordHelpInline" class="d-block mb-2 form-text text-danger">
                    {{ $message }}
                </span>
            @enderror

            <!-- category -->
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id" class="form-select">
                @foreach(App\Models\Category::all() as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                    >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                <span id="passwordHelpInline" class="d-block mb-2 form-text text-danger">
                    {{ $message }}
                </span>
            @enderror

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
