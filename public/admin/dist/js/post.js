$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
   $('#FormCreatePost').submit(function (e) {
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
                   this.reset();
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
});
