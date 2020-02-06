@extends('admin.layouts.app')

@section('pageTitle')
    Chi tiết bài viết
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('indexAdmin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Show Post</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-header">
                                    <h3>Thêm bài viết mới</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Tiêu đề danh mục</label>
                                        <input type="text" required class="form-control" value="{{ $post->title }}" placeholder="Enter Post Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Ảnh</label>
                                        <div>
                                            <img width="450px" height="300px" src="{{ asset('storage/posts/'. $post->image ) }}" alt="Preview Image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc danh mục</label>
{{--                                            @foreach($categories as $category)--}}
{{--                                                {{ isset($post->categories()->id) == $category->id ? "1" : 0 }}--}}
{{--                                            @endforeach--}}
                                        @foreach($post->categories as $category)
                                            {{ $loop->first ? '' : ',' }}{{ $category->name }}
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung</label>
                                        <textarea readonly class="form-control" id="summary-ckeditor" name="summary_ckeditor">
                                            {{ $post->content }}
                                        </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="{{ route('posts.index') }}">
                                        <button type="button" class="btn btn-success">
                                            Trở về trang danh sách bài viết
                                        </button>
                                    </a>
                                    <a href="{{ route('posts.edit', $post->id) }}">
                                        <button type="button" class="btn btn-success">
                                            Chỉnh sửa bài viết
                                        </button>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@section('script')
    <script>
        //custom ckeditor
        CKEDITOR.replace( 'summary-ckeditor');
        $('#post_category_id').multiselect();
        //end custom ckeditor
    </script>
@endsection
