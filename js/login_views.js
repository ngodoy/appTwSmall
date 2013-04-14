$(document).ready(listo);

function listo(){
    $('#miformulario').validate({
        rules: {
            passw: {
                minlength: 5,
                required: true
            },
            user: {
                minlength: 5,
                required: true
            }           
        },
        highlight: function(element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element
            .text('OK!').addClass('valid')
            .closest('.control-group').removeClass('error').addClass('success');
        }
    });
}
