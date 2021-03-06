$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    function CKupdate(){
        for ( instance in CKEDITOR.instances ){
            CKEDITOR.instances[instance].updateElement();
        }
    }
    //create
   $('#FormCreatePost').submit(function (e) {
       CKupdate();
       e.preventDefault();
       let formData = new FormData(this);
       $.ajax({
           url: '/admin/posts',
           dataType: 'json',
           type: 'post',
           data: formData,
           contentType: false,
           processData: false,
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
           }
       });
   });
   //end create

    //delete
    $('.delete-post').click(function () {
        var post_id = $(this).data("id");
        $('#delete-post-modal').modal('show');
        $('#ok_post_delete').click(function () {
            $.ajax({
                url: '/admin/posts/' + post_id,
                type: 'delete',
                dataType: 'json',
                success: function (data) {
                    if (data.status == true) {
                        $("#post_id_" + post_id).remove();
                        Swal.fire(
                            'Good job!',
                            'Delete Successful !',
                            'success'
                        );
                        $('#delete-post-modal').modal('hide');
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            })
        });
        // if (confirm("Are You sure want to delete !")){
        //
        // }
    });
    // end delete

    //edit
    $('#FormEditPost').submit(function (e) {
        CKupdate();
        e.preventDefault();
        let id = $('#post_id').val();
        $.ajax({
            url: '/admin/posts/' + id,
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
    //end edit
});
