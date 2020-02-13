$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
   //create
   $('#cate_Ok').click(function () {
      var route = $('#cate_create_route').val();
      $.ajax({
         url: route,
         dataType: 'json',
         type: 'post',
         data: {
            'name': $('#cate_name').val()
         },
         success: function (result) {
            console.log(result);
            if (result.status == false){
               Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: result.msg,
               });
               setTimeout(function () {
                  $('#cate_name').val('');
               }, 1000);
            }else {
               Swal.fire(
                   'Good job!',
                   'Create Successful !',
                   'success'
               );
               setTimeout(function () {
                  $('#cate_name').val('');
               }, 1000);
            }
         }
      })
   });
   //end create

   //delete
   $('.delete-category').click(function () {
      var cate_id = $(this).data("id");
      $('#delete-cate-modal').modal('show');
      $('#ok_delete').click(function () {
         $.ajax({
            url: '/admin/categories/' + cate_id,
            type: 'delete',
            dataType: 'json',
            success: function (data) {
               if (data.status == true) {
                  $("#cate_id_" + cate_id).remove();
                  Swal.fire(
                      'Good job!',
                      'Delete Successful !',
                      'success'
                  );
                  $('#delete-cate-modal').modal('hide');
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
   $('.edit-category').click(function () {
      var cate_id = $(this).data('id');
      $.get('/admin/categories/' + cate_id +'/edit', function (result) {
         $('#edit-cate-modal').modal('show');
         $('#update_name').val(result.data.name);
      });
      $('#ok_update').click(function () {
         $.ajax({
            url: '/admin/categories/' + cate_id,
            type: 'put',
            dataType: 'json',
            data: {
               'name': $('#update_name').val()
            },
            success: function (result) {
               if (result.status == true) {
                     Swal.fire(
                         'Good job!',
                         'Update Successful !',
                         'success'
                     );
                  // $('#edit-cate-modal').modal('hide');
               }else{
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
   //end edit
});
