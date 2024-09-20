"use strict";
$("#products").DataTable({
    pageLength: 10,
   "responsive": true, "lengthChange": false, "autoWidth": false
 }).buttons().container().appendTo('#products_wrapper .col-md-6:eq(0)');

$("#products").on('click', '.delete_row', function(){
 $('#delete_id').val($(this).data('id'));
 $('#delete_modal').modal('show');
});

$('#productFormAddEdit').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 150
            },
        },
        messages: {
            name: {
                required: "Please enter a product name",
                minlength: "Product name must have at least 3 characters",
                maxlength: 'Product name cannot exceed more than 150 characters',
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });