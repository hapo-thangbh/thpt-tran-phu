@extends('admin.layouts.app')

@section('pageTitle')
    Danh sách cài đặt
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
                            <li class="breadcrumb-item active">List Setting</li>
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
                                <h3 class="card-title">Danh sách cài đặt</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
{{--                                            <th style="width: 10px">ID</th>--}}
                                            <th>Name</th>
                                            <th>Banner</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Description</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
{{--                                            <td>{{ $setting->id }}</td>--}}
                                            <td>{{ $setting->name }}</td>
                                            <td>{{ $setting->banner }}</td>
                                            <td>{{ $setting->address }}</td>
                                            <td>{{ $setting->phone }}</td>
                                            <td>{{ $setting->email }}</td>
                                            <td>{{ $setting->description }}</td>
                                            <td class="w-25 text-center">
                                                <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $setting->id) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content -->
@endsection

@section('script')

@endsection
