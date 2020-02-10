@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 mb-3 pr-md-0">
            @include('includes.slide', ['newPosts' => $newPosts])
        </div>
    </div>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-12 col-md-6 pr-md-0">
                @include('includes.post', ['category' => $category])
            </div>
        @endforeach
    </div>
@endsection
