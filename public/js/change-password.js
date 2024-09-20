"use strict";
$('#change-password').validate({
    rules: {
        current_password: {
            required: true,
            minlength: 6 // Example rule for minimum length
        },
        new_password: {
            required: true,
            minlength: 6 // Example rule for minimum length
        },
        new_password_confirmation: {
            required: true,
            equalTo: '#new_password' // Ensure new_password_confirmation matches new_password
        }
    },
    messages: {
        current_password: {
            required: "Please enter your current password"
        },
        new_password: {
            required: "Please enter a new password"
        },
        new_password_confirmation: {
            required: "Please confirm your new password",
            equalTo: "Passwords do not match"
        }
    },
    errorElement: 'span', errorPlacement: function (error, element) {
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
