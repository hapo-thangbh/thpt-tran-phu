// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
//
// $('#page_ok_update').click(function () {
//     let id = $('#page_id').val();
//     let data = $('#FormEditPages').serialize();
//     $.ajax({
//         url: '/admin/pages/' + id,
//         data: { hic: "hic hic"},
//         type: 'put',
//         dataType:'json',
//         // data: new FormData($('#FormEditPages')[0]),
//         contentType: false,
//         processData: false,
//         success: function (result) {
//             if (result.status === true){
//                 Swal.fire(
//                     'Good job!',
//                     'Create Successful !',
//                     'success'
//                 );
//             }else {
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'Oops...',
//                     text: result.msg,
//                 });
//             }
//         }
//     });
// });
// $(document).ready(function () {
//     //edit
//     // $('#page_ok_update').click(function () {
//     //     let id = $('#page_id').val();
//     //     $.ajax({
//     //         url: '/admin/pages/' + id,
//     //         type: 'put',
//     //         processData: false,
//     //         contentType: false,
//     //         data: {
//     //             'page_name': $('#page_name').val(),
//     //             'page_banner': $('#page_banner').val(),
//     //             'page_address': $('#page_address').val(),
//     //             'page_phone': $('#page_phone').val(),
//     //             'page_email': $('#page_email').val(),
//     //             'page_description': $('#page_description').val()
//     //         },
//     //
//     //         success: function (result) {
//     //             if (result.status == true){
//     //                 Swal.fire(
//     //                     'Good job!',
//     //                     'Create Successful !',
//     //                     'success'
//     //                 );
//     //             }else {
//     //                 Swal.fire({
//     //                     icon: 'error',
//     //                     title: 'Oops...',
//     //                     text: result.msg,
//     //                 });
//     //             }
//     //         },
//     //         errors(e) {
//     //             console.log(e)
//     //         }
//     //     });
//     // });
//
//
//     // end edit
// });
