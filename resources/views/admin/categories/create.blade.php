@extends('admin.layouts.app')

@section('pageTitle')
    Thêm danh mục
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
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
                            <form role="form">
                                <div class="card-header">
                                    <h3>Thêm danh mục mới</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề danh mục</label>
                                        <input type="text" class="form-control" placeholder="Enter category title">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label>Minimal</label>--}}
{{--                                        <select class="form-control select2" style="width: 100%;">--}}
{{--                                            <option selected="selected">Alabama</option>--}}
{{--                                            <option>Alaska</option>--}}
{{--                                            <option>California</option>--}}
{{--                                            <option>Delaware</option>--}}
{{--                                            <option>Tennessee</option>--}}
{{--                                            <option>Texas</option>--}}
{{--                                            <option>Washington</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Tạo mới</button>
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

@endsection