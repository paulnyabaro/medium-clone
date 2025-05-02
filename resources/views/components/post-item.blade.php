<div class="p-4 border rounded my-2 bg-gray-50 hover:bg-white">
    <h3><b>{{ $post->title }}</b></h3>
    <p>{{ Str::words($post->content, 20) }}</p>
    <a href=""><x-primary-button>Read More</x-primary-button></a>
</div>