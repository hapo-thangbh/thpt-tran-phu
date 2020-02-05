@extends('admin.layouts.app')

@section('pageTitle')
    Sửa cài đặt
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
                            <li class="breadcrumb-item active">Edit Setting</li>
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
                            <form role="form" id="FormEditPages" action="{{ route('pages.update', $setting->id) }}" method="put" enctype="multipart/form-data">
                                {{ csrf_token() }}
                                <div class="card-header">
                                    <h3>Sửa cài đặt</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">ID</label>
                                        <input type="text" readonly class="form-control" value="{{ $setting->id }}" id="page_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <input type="text" required class="form-control" value="{{ $setting->name }}" id="page_name" name="page_name" placeholder="Enter Setting Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Ảnh</label>
                                        <div class="mb-3">
                                            <input type="file" required class="custom-file-input" id="page_banner" name="page_banner">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div>
                                            <img id="imageOld" width="350px" height="200px" src="{{ asset('/storage/pages/'.$setting->image) }}" alt="">
                                            <img id="imagePreview" src="" alt="Preview Image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Địa chỉ</label>
                                        <input type="text" required class="form-control" value="{{ $setting->address }}" id="page_address" name="page_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Điện thoại</label>
                                        <input type="text" required class="form-control" value="{{ $setting->phone }}" id="page_phone" name="page_phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Địa chỉ email</label>
                                        <input type="email" required class="form-control" value="{{ $setting->email }}" id="page_email" name="page_email">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Mô tả</label>
                                        <textarea rows="5" class="form-control" id="page_description" name="page_description">
                                            {{ $setting->description }}
                                        </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" id="page_ok_update" class="btn btn-success">
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
            $("#page_banner").change(function() {
                $('#imageOld').hide();
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
    </script>
@endsection

<style>
    #imagePreview {
        width: 450px;
        height: 300px;
    }
</style>
