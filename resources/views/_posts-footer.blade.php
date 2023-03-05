<footer class="blog-footer">
    <p>Made by Alek from vavok.net</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
@if (session()->has('success'))
    <div class="fixed-top d-flex justify-content-center text-bg-success p-3 m-3 rounded w-25">
        <p>{{ session('success') }}</p>
    </div>
@endif
