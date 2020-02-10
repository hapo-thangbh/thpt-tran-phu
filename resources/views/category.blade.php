@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-12 pr-md-0">
            <div class="panel-heading">
                <div class="panel-title">
                    {{ $category->name }}
                </div>
            </div>
        </div>
    </div>
    @include('includes.category_post', ['posts' => $posts])
    <div class="show-posts"></div>
    <div class="w-100 text-center">
        {{ $posts->links() }}
    </div>
    <div class="fb-comments" data-href="https://www.facebook.com/THPTTranPhuHoanKiem/" data-width="100%" data-numposts="5"></div>
@endsection
