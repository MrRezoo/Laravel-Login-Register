'use strict';
var notify = $.notify('<i class="fa fa-cloud-upload"></i><strong>در حال بارگذاری</strong> صفحه این صفحه را نبندید...', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    timer: 300
});

setTimeout(function() {
    notify.update('message', '<i class="fa fa-cloud-upload"></i><strong>در حال بارگذاری</strong> داده های داخلی.');
}, 1000);
