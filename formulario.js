/* # Validando Formulario
============================================*/
$(document).ready(function () {
    $('#formulario').validate({
        errorElement: "span",
        rules: {
            nombre: {
                minlength: 2,
                required: true,
                rangelength: [3,15]
            },
            apellido1: {
                minlength: 2,
                required: true
            },
            apellido2: {
                minlength: 2,
                required: true
            },
            telefono: {
                minlength: 10,
                maxlength: 10,
                digits:true,
                required: true
            },
            correo_electronico: {
                required: true,
                email: true
            },
            contrasena: {
                minlength: 6,
                required: true
            },
        },
        highlight: function (element) {
            $(element).closest('.control-group')
                .removeClass('success').addClass('error');
        },
        success: function (element) {
            element
                .text('Correcto!').addClass('help-inline')
                .closest('.control-group')
                .removeClass('error').addClass('success');
        }
    });
});