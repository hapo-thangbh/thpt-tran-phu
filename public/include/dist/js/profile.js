$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $('#profile-change-password').click(function () {
        $('#profile-changepass-modal').modal('show');
        $('#ok_changepass').click(function () {
            $.ajax({
                url: '/admin/profile/change-password',
                type: 'post',
                dateType: 'json',
                data: {
                    'current_password': $('#profile_old_pass').val(),
                    'password': $('#profile_new_pass').val(),
                    'password_confirm': $('#profile_confirm_new_pass').val(),
                },
                success: function (result) {
                    if (result.status == true){
                        Swal.fire(
                            'Good job!',
                            'Change Password Successful !',
                            'success'
                        );
                        $('#profile-changepass-modal').modal('hide');
                    }else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: result.msg,
                        });
                    }
                }
            });
        });
    })
});
