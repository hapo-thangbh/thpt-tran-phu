@foreach($posts as $post)
    <div class="row mb-2 pb-2 border-custom-2">
        <div class="col-4">
            <img class="w-100"
                 src="{{ asset('storage/posts/' . $post->image) }}">
        </div>

        <div class="col-8 p-md-0">
            <a href="{{ route('post_show', $post->id) }}" class="text-nav">{{ $post->title }}</a>
        </div>
    </div>
@endforeach
