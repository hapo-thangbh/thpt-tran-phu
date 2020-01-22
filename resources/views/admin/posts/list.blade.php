@extends('admin.layouts.app')

@section('pageTitle')
    Danh sách bài viết
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
                            <li class="breadcrumb-item active">List Post</li>
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
                                <h3 class="card-title">Danh sách các bài viết</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th style="width: 10px">ID</th>
                                        <th style="width: 400px">Title</th>
                                        <th>Image</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr id="post_id_{{ $post->id }}">
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <img width="350px" height="200px" src="{{ asset('storage/posts/'.$post->image) }}" alt="Image Post">
                                            </td>
                                            <td class="w-25 text-center">
                                                <a class="btn btn-info btn-sm show-post" href="{{ route('posts.show', $post->id) }}">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                    Show
                                                </a>
                                                <a class="btn btn-info btn-sm edit-post" href="{{ route('posts.edit', $post->id) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm delete-post" href="javascript:void(0)" data-id="{{ $post->id }}">
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
                                    {{ $posts->links() }}
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
        <div id="delete-post-modal" class="modal fade">
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
                        <button type="button" id="ok_post_delete" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        {{--        end modal delete--}}
    </div>
    <!-- /.content -->
@endsection

@section('script')

@endsection
