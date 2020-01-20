@extends('admin.layouts.app')

@section('pageTitle')
    Danh sách danh mục
@endsection

@section('content')
    <!-- Main content -->
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
                            <li class="breadcrumb-item active">List Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách các danh mục</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 10px">ID</th>
                                            <th>Name</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr id="cate_id_{{ $category->id }}">
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td class="w-25 text-center">
                                                <a class="btn btn-info btn-sm edit-category" href="javascript:void(0)" data-id="{{ $category->id }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm delete-category" href="javascript:void(0)" data-id="{{ $category->id }}">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{ $categories->links() }}
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
{{--        modal delete--}}
        <div id="delete-cate-modal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="fa fa-trash"></i>
                        </div>
                        <h4 class="modal-title">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="button" id="ok_delete" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        {{--        end modal delete--}}
{{--        modal edit--}}
        <div class="modal fade" id="edit-cate-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Category</h4>
                    </div>
                    <form id="cateForm" name="cateForm" class="form-horizontal">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="update_name" placeholder="Enter Name" value="" maxlength="50" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="ok_update" value="Update">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--        end modal edit--}}
    </div>
    <!-- /.content -->
@endsection

@section('script')

@endsection
