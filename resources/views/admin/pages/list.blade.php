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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td>{{ isset($setting->name) ? $setting->name : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Banner: </td>
                                            <td><img width="350px" height="200px" src="{{ asset('storage/pages/'.$setting->banner) }}" alt="Image Banner"></td>
                                        </tr>
                                        <tr>
                                            <td>Address: </td>
                                            <td>{{ isset($setting->address) ? $setting->address : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone: </td>
                                            <td>{{ isset($setting->phone) ? $setting->phone : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email: </td>
                                            <td>{{ isset($setting->email) ? $setting->email : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description: </td>
                                            <td>{{ isset($setting->description) ? $setting->description : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Action: </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $setting->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </thead>
{{--                                    <thead>--}}
{{--                                        <tr class="text-center">--}}
{{--                                            <th style="width: 10px">ID</th>--}}
{{--                                            <th>Name</th>--}}
{{--                                            <th>Banner</th>--}}
{{--                                            <th>Address</th>--}}
{{--                                            <th>Phone</th>--}}
{{--                                            <th>Email</th>--}}
{{--                                            <th>Description</th>--}}
{{--                                            <th style="width: 40px">Action</th>--}}
{{--                                        </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $setting->id }}</td>--}}
{{--                                            <td>{{ isset($setting->name) ? $setting->name : '' }}</td>--}}
{{--                                            <td>--}}
{{--                                                <img width="350px" height="200px" src="{{ asset('storage/pages/'.$setting->banner) }}" alt="Image Banner">--}}
{{--                                            </td>--}}
{{--                                            <td>{{ isset($setting->address) ? $setting->address : '' }}</td>--}}
{{--                                            <td>{{ isset($setting->phone) ? $setting->phone : '' }}</td>--}}
{{--                                            <td>{{ isset($setting->email) ? $setting->email : '' }}</td>--}}
{{--                                            <td>{{ isset($setting->description) ? $setting->description  : '' }}</td>--}}
{{--                                            <td class="w-25 text-center">--}}
{{--                                                <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $setting->id) }}">--}}
{{--                                                    <i class="fas fa-pencil-alt">--}}
{{--                                                    </i>--}}
{{--                                                    Edit--}}
{{--                                                </a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </tbody>--}}
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
