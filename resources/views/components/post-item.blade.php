<div class="p-4 border rounded my-2 bg-gray-50 hover:bg-white">
    <h3><b>{{ $post->title }}</b></h3>
    <p>{{ Str::words($post->content, 20) }}</p>
    <a href="" class="py-2 px-3 rounded bg-blue-100 hover:bg-blue-200 text-blue-800 mt-2 inline-flex">Read More</a>
</div>