@extends("layouts.app")
@section("content")
    <h1 class="text-3xl font-bold text-white-800 mb-4">All Posts</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $post['title'] }}</h2>
                    <p class="text-gray-600 min-h-25">{{ $post['excerpt'] }}</p>
                    <a href="/blogs/{{ $post['id'] }}" class="btn btn-primary">
                        Read More
                    </a>
                </div>
            </div>
            
        @endforeach
    </div>
@endsection