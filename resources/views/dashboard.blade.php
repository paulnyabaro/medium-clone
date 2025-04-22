<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2><b>Categories</b></h2>
                    <ul class="flex gap-4">
                        <x-category-tabs />
                    </ul>
                    @if($posts)
                    <h2><b>Posts</b></h2>
                    @foreach ($posts as $post)
                        <x-post-item :post="$post" />
                    @endforeach

                    {{ $posts->onEachSide(1)->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
