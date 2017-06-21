'use strict';


var body = $('body');


/*------------------------------------------------
    Notify
-------------------------------------------------*/
var notify = function(type, message, title) {

    var icons = {'success' : 'fa fa-check', 'info' : 'fa fa-info', 'warning' : 'fa fa-warning', 'danger' : 'fa fa-times'};
    var icon = icons[type];

    $.notify({
        icon: icon,
        title: title,
        message: message,
        url: ''
    },{
        element: 'body',
        type: type,
        allow_dismiss: true,
        placement: {
            from: 'top',
            align: 'right'
        },
        offset: {
            x: 20,
            y: 20
        },
        spacing: 10,
        z_index: 1031,
        delay: 3000,
        timer: 1000,
        url_target: '_blank',
        mouse_over: false,
        template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
        (icon ? '<span data-notify="icon"></span> ' : '') +
        (title ? '<span data-notify="title">{1}</span>' : '') +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close"><i class="fa fa-times"></i></button>' +
        '</div>'
    });

}


/*------------------------------------------------
    Form group blue line
-------------------------------------------------*/
if($('.form-group--float')[0]) {

    $('.form-group--float').each(function () {
        var p = $(this).find('.form-control').val()

        if(!p.length == 0) {
            $(this).find('.form-control').addClass('form-control--active');
        }
    });

    $(body).on('blur', '.form-group--float .form-control', function(){
        var i = $(this).val();

        if (i.length == 0) {
            $(this).removeClass('form-control--active');
        }
        else {
            $(this).addClass('form-control--active');
        }
    });
}  