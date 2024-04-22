/*!
    * Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(document).ready(function() {
    $('.summernote').summernote({
        lang: 'nb-NO'
    });
});


// Update Password
$(document).ready(function() {
    $('#update-password-btn').click(function(e) {
        e.preventDefault();

        var formData = $('#update-password-form').serialize();

        $.ajax({
            url: $('#update-password-form').attr('action'),
            type: 'PUT',
            data: formData,
            success: function(response) {
                // Clear any previous error messages
                $('#update-password-form .invalid-feedback').hide();
                $('#update-password-form .is-invalid').removeClass('is-invalid');

                // Show success message
                $('#update-password-success').text(response.message).show();

                // Reset form
                $('#update-password-form')[0].reset();
            },
            error: function(xhr) {
                // Display error messages
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#'+key+'-error').text(value[0]).show();
                        $('#'+key).addClass('is-invalid');
                    });
                }
            }
        });
    });
});