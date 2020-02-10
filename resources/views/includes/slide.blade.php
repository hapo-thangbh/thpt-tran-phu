<div class="slide-item">
    <div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
            @foreach($newPosts as $key => $post)
                <div class="carousel-item @if($key == 0) active @endif">
                    <img src="{{ asset('storage/posts/' . $post->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="mb-md-5">{{ $post->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
