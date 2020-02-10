<div class="mb-3">
    <div class="panel-heading">
        <div class="panel-title">
            {{ $category->name }}
        </div>
    </div>
    <div class="post__content">
        @foreach($category->posts as $key => $post)
            @if($key ==0)
                <div class="row mb-2">
                    <div class="col-4">
                        <img class="w-100"
                             src="{{ asset('storage/posts/' . $post->image) }}">
                    </div>

                    <div class="col-8 p-md-0">
                        <a href="" class="text-nav">{{ $post->title }}</a>
                    </div>
                </div>
            @else
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="bg-custom">
                            <i class="fa fa-angle-double-right"></i> <a href="#" class="text-nav">{{ $post->title }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="row mb-2">
            <div class="col-12 text-right">
                <i class="fa fa-angle-double-right"></i>
                <a href="{{ route('categories_show', $category->id) }}" class="text-nav">Xem thêm</a>
                <i class="fa fa-angle-double-left"></i>
            </div>
        </div>
    </div>
</div>
