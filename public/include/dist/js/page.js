$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    //edit
    $('#FormEditPages').submit(function (e) {
        e.preventDefault();
        let id = $('#page_id').val();
        $.ajax({
            url: '/admin/pages/' + id,
            method: 'put',
            data: $(this).serialize(),
            success: function (result) {
                if (result.status == true){
                    Swal.fire(
                        'Good job!',
                        'Create Successful !',
                        'success'
                    );
                }else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.msg,
                    });
                }
            },
            errors(e) {
                console.log(e)
            }
        });
    });
    // end edit
});
