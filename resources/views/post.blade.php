@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-12 pr-md-0">
            <h1>{{ $post->title }}</h1>
            <img class="w-100 my-3"
                 src="{{ asset('storage/posts/' . $post->image) }}">
            {!! $post->content !!}
        </div>
    </div>
    <div class="fb-comments" data-href="https://www.facebook.com/THPTTranPhuHoanKiem/" data-width="100%" data-numposts="5"></div>
@endsection
