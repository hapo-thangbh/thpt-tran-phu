@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-12 pr-md-0">
            <div class="panel-heading">
                <div class="panel-title">
                    BẢN ĐỒ VỊ TRÍ
                </div>
            </div>
        </div>
    </div>
    @include('includes.category_post')
    <div class="show-posts"></div>
    <div class="w-100 text-center">
        <i style="font-size: 24px" class="fa fa-angle-double-down cursor-pointer js-get-posts" data-src="{{ route('categories.show', 1) }}"></i>
    </div>
    <div class="fb-comments" data-href="https://www.facebook.com/THPTTranPhuHoanKiem/" data-width="100%" data-numposts="5"></div>
@endsection
@section('scripts')
    <script>
        $(document).on('click', '.js-get-posts', function () {
            $.ajax({
                url: $(this).data('src'),
                method: 'GET',
                success: function (response) {
                    $('.show-posts').append(response.view);
                }
            })
        })
    </script>
@endsection
