@extends('admin.layouts.app')

@section('pageTitle')
    Sửa bài viết
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
                            <li class="breadcrumb-item active">Edit Post</li>
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
                            <form role="form" id="FormCreatePost" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-header">
                                    <h3>Sửa bài viết</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Tiêu đề danh mục</label>
                                        <input type="text" required class="form-control" value="{{ $edit_post->title }}" id="post_title" name="post_title" placeholder="Enter Post Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Ảnh</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" required class="custom-file-input" id="chooseImage" name="post_image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div>
                                            <img width="350px" height="200px" src="{{ asset('/storage/posts/'.$edit_post->image) }}" alt="">
                                            <img id="imagePreview" src="" alt="Preview Image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc danh mục</label>
                                        <select name="post_category_id[]" required id="post_category_id" multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100">
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select><!-- End -->
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung</label>
                                        <textarea class="form-control" id="summary-ckeditor" name="summary_ckeditor">
                                            {{ $edit_post->content }}
                                        </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit"class="btn btn-success">
                                        Cập nhật
                                    </button>
                                    <button type="reset" class="btn btn-success">Làm mới</button>
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
        $(document).ready(function() {
            $('.selectpicker').selectpicker();

            $('#imagePreview').css('display', 'none');
            //image preview before upload
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('display', 'block');
                        $('#imagePreview').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#chooseImage").change(function() {
                readURL(this);
            });
        });
        //end preview image

        //custom input file
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        //end custom input file
        //custom ckeditor
        CKEDITOR.replace( 'summary-ckeditor');
        //end custom ckeditor
    </script>
@endsection

<style>
    #imagePreview {
        width: 450px;
        height: 300px;
    }
</style>