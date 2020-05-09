var SweetAlert_custom = {
    init: function() {
        document.querySelector('.sweet-1').onclick = function(){
            swal("سلام جهان!");
        },  document.querySelector('.sweet-2').onclick = function(){
                swal("اینجا عنوان است!", "... و در اینجا متن است!");
        },  document.querySelector('.sweet-3').onclick = function(){
                swal("آفرین!", "شما دکمه را کلیک کرده اید!", "info");
        },  document.querySelector('.sweet-4').onclick = function(){
                swal("بر روی دکمه یا در خارج از مدال کلیک کنید.")
                .then((value) => {
                swal(`مقدار برگردانده شده: ${value}`);
            });
        },  document.querySelector('.sweet-5').onclick = function(){
                swal({
                    title: "شما مطمئن هستید؟",
                    text: "پس از حذف شدن، نمیتوانید این فایل تخیلی را بازیابی کنید!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("اوف! فایل خیالی شما حذف شده است!", {
                            icon: "success",
                        });
                    } else {
                        swal("فایل خیالی شما امن است!");
                    }
                })
        },  document.querySelector('.sweet-6').onclick = function(){
                swal("آفرین!", "شما دکمه را کلیک کرده اید!", "warning");
        },  document.querySelector('.sweet-7').onclick = function(){
                swal("آفرین!", "شما دکمه را کلیک کرده اید!", "error");
        },  document.querySelector('.sweet-8').onclick = function(){
                swal("آفرین!", "شما دکمه را کلیک کرده اید!", "success");
        },  document.querySelector('.sweet-9').onclick = function(){
                swal("آفرین!", "شما دکمه را کلیک کرده اید!", "info");
        },  document.querySelector('.sweet-10').onclick = function(){
                swal("آیا مطمئنید که می خواهید این کار را انجام دهید؟", {
                    buttons: ["اوه نه!", "آه ایس!"],
                });
        },  document.querySelector('.sweet-11').onclick = function(){
                swal("آیا مطمئنید که می خواهید این کار را انجام دهید؟", {
                    buttons: ["اوه نه!", "آه ایس!"],
                });
        },  document.querySelector('.sweet-12').onclick = function(){
                swal("وحشی ظاهر شد! چه کاری می خواهید انجام دهید؟", {
                    buttons: {
                        cancel: "فرار کن!",
                        catch: {
                            text: "Throw Pokéball!",
                            value: "catch",
                        },
                        defeat: true,
                    },
                })
                .then((value) => {
                    switch (value) {
                        case "defeat":
                        swal("پیکاسو ناپدید شد! شما 500 امتیاز دریافت کردید!");
                        break;
                        case "catch":
                        swal("باریکلا!", "پیکاسو گرفتار شد!", "success");
                        break;
                        default:
                        swal("با خیال راحت بیرون بریز!");
                    }
                });
        },  document.querySelector('.sweet-13').onclick = function(){
                swal("نوشتن چیزی در اینجا:", {
                    content: "input",
                })
                .then((value) => {
                    swal(`You typed: ${value}`);
                });
        };
    }
};
(function($) {
    SweetAlert_custom.init()
})(jQuery);