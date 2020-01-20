@extends('admin.layouts.app')

@section('pageTitle')
    Hồ sơ cá nhân
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
                            <li class="breadcrumb-item active">Profile</li>
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
                                <h3 class="card-title">Thông tin</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="javascript:void(0)" id="profile-change-password">
                                    <button class="btn btn-success">Đổi mật khẩu</button>
                                </a>
                                <table class="table table-bordered text-center mt-2">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th>Name</th>
                                        <th>Account</th>
{{--                                        <th>Password</th>--}}
                                        <th>Level</th>
                                        <th>Updated At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ isset($user->name) ? $user->name : "" }}</td>
                                            <td>{{ $user->account }}</td>
{{--                                            <td>{{ isset($user->password) ? \Illuminate\Support\Str::limit($user->password, 1, '....') : "" }}</td>--}}
                                            <td>
                                                {{ isset($user->level) == \App\User::ADMIN ? 'Admin' : 'User' }}
                                            </td>
                                            <td>{{ $user->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{--        modal changepass--}}
                                <div class="modal fade" id="profile-changepass-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Thay đổi mật khẩu</h4>
                                            </div>
                                            <form id="" name="" action="{{ route('postAdminChangePass') }}" method="post" class="form-horizontal">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="password" class="col-sm-12 control-label">Mật khẩu cũ</label>
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" name="current_password" id="profile_old_pass" placeholder="Enter Old Password" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-sm-12 control-label">Mật khẩu mới</label>
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" name="password" id="profile_new_pass" placeholder="Enter New Password" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-sm-12 control-label">Nhập lại mật khẩu mới</label>
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control" name="password_confirm" id="profile_confirm_new_pass" placeholder="Re-Enter New Password" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" id="ok_changepass" value="Update">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{--        end modal changepass --}}
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
