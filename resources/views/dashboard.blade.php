<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($categories)
                    <h2><b>Categories</b></h2>
                    <ul class="flex gap-4">
                        @foreach ($categories as $category )
                        <li class="underline">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                    @endif

                    @if($posts)
                    <h2><b>Posts</b></h2>
                    @foreach ($posts as $post)
                        <div class="p-4 border rounded mt-2 bg-gray-50 hover:bg-white">
                            <h3><b>{{ $post->title }}</b></h3>
                            <p>{{ Str::words($post->content, 20) }}</p>
                            <a href="" class="py-2 px-3 rounded bg-blue-100 hover:bg-blue-200 text-blue-800 mt-2 inline-flex">Read More</a>
                        </div>
                    @endforeach

                    {{ $posts->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
