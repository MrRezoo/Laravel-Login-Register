if (localStorage.getItem("color"))
	$("#color").attr("href", "../assets/css/" + localStorage.getItem("color") + ".css");
if (localStorage.getItem("dark"))
	$("body").attr("class", "dark-only");
$('<div class="customizer-links"> <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="c-pills-home-tab" data-toggle="pill" href="#c-pills-home" role="tab" aria-controls="c-pills-home" aria-selected="true"> <div class="settings"> <i class="icofont icofont-ui-settings"></i> </div></a> <a class="nav-link" id="c-pills-profile-tab" data-toggle="pill" href="#c-pills-profile" role="tab" aria-controls="c-pills-profile" aria-selected="false"> <div class="settings color-settings"> <i class="icofont icofont-color-bucket"></i> </div></a> </div></div><div class="customizer-contain"> <div class="tab-content" id="c-pills-tabContent"> <div class="customizer-header"> <i class="icofont-close icon-close"></i> <h5>شخصی سازی</h5> <p class="mb-0">سفارشی کردن و پیش نمایش در آن واحد</p></div><div class="customizer-body custom-scrollbar"> <div class="tab-pane fade show active" id="c-pills-home" role="tabpanel" aria-labelledby="c-pills-home-tab"> <h6>نوع طرح</h6> <ul class="main-layout layout-grid"> <li data-attr="ltr"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"> <span class="badge badge-dark">طرح جپ چین</span> </li></ul> </div></li><li data-attr="rtl" class="active"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light body"> <span class="badge badge-dark">طرح راست چین</span> </li><li class="bg-dark sidebar"></li></ul> </div></li></ul> <h6 class="">نوع نوارکناری</h6> <ul class="sidebar-type layout-grid"> <li data-attr="normal-sidebar" class="active"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"> </li></ul> </div></li><li data-attr="compact-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar compact"></li><li class="bg-light body"> </li></ul> </div></li><li data-attr="compact-icon-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar compact-icon"></li><li class="bg-light body"> </li></ul> </div></li></ul> <h6 class="">تنظیمات نوارکناری</h6> <ul class="sidebar-setting layout-grid"> <li class="active" data-attr="default-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body bg-light"> <span class="badge badge-dark">پیش فرض</span> </div></li><li data-attr="border-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body bg-light"> <span class="badge badge-dark">مرز</span> </div></li><li data-attr="iconcolor-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body bg-light"> <span class="badge badge-dark">رنگ آیکون</span> </div></li></ul> <h6 class="">تنظیمات پس زمینه نوارکناری</h6> <ul class="nav nac-pills" id="pills-tab" role="tablist"> <li class="nav-item"><a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" data-original-title="" title="">رنگ</a></li><li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" data-original-title="" title="">الگو</a></li><li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" data-original-title="" title="">تصویر</a></li></ul> <div class="tab-content sidebar-main-bg-setting" id="pills-tabContent"> <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> <ul class="sidebar-bg-settings"> <li class="bg-dark active" data-attr="dark-sidebar"> </li><li class="bg-white" data-attr="light-sidebar"> </li><li class="bg-color1" data-attr="color1-sidebar"> </li><li class="bg-color2" data-attr="color2-sidebar"> </li><li class="bg-color3" data-attr="color3-sidebar"> </li><li class="bg-color4" data-attr="color4-sidebar"> </li><li class="bg-color5" data-attr="color5-sidebar"> </li></ul> </div><div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <ul class="sidebar-bg-settings"> <li class=" bg-pattern1" data-attr="sidebar-pattern1"> </li><li class=" bg-pattern2" data-attr="sidebar-pattern2"> </li><li class=" bg-pattern3" data-attr="sidebar-pattern3"> </li><li class=" bg-pattern4" data-attr="sidebar-pattern4"> </li><li class=" bg-pattern5" data-attr="sidebar-pattern5"> </li><li class=" bg-pattern6" data-attr="sidebar-pattern6"> </li></ul> </div><div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> <ul class="sidebar-bg-settings"> <li class="bg-img1" data-attr="sidebar-img1"> </li><li class="bg-img2" data-attr="sidebar-img2"> </li><li class="bg-img3" data-attr="sidebar-img3"> </li><li class="bg-img4" data-attr="sidebar-img4"> </li><li class="bg-img5" data-attr="sidebar-img5"> </li><li class="bg-img6" data-attr="sidebar-img6"> </li></ul> </div></div></div><div class="tab-pane fade " id="c-pills-profile" role="tabpanel" aria-labelledby="c-pills-profile-tab"> <h6>طرح روشن</h6> <ul class="layout-grid customizer-color"> <li class="color-layout" data-attr="light-1" data-primary="#4466f2" data-secondary="#1ea6ec"> <div></div></li><li class="color-layout" data-attr="light-2" data-primary="#0288d1" data-secondary="#26c6da"> <div></div></li><li class="color-layout" data-attr="light-3" data-primary="#8e24aa" data-secondary="#ff6e40"> <div></div></li><li class="color-layout" data-attr="light-4" data-primary="#4c2fbf" data-secondary="#2e9de4"> <div></div></li><li class="color-layout" data-attr="light-5" data-primary="#7c4dff" data-secondary="#7b1fa2"> <div></div></li><li class="color-layout" data-attr="light-6" data-primary="#3949ab" data-secondary="#4fc3f7"> <div></div></li></ul> <h6 class="">طرح تاریک</h6> <ul class="layout-grid customizer-color dark"> <li class="color-layout" data-attr="dark-1" data-primary="#4466f2" data-secondary="#1ea6ec"> <div></div></li><li class="color-layout" data-attr="dark-2" data-primary="#0288d1" data-secondary="#26c6da"> <div></div></li><li class="color-layout" data-attr="dark-3" data-primary="#8e24aa" data-secondary="#ff6e40"> <div></div></li><li class="color-layout" data-attr="dark-4" data-primary="#4c2fbf" data-secondary="#2e9de4"> <div></div></li><li class="color-layout" data-attr="dark-5" data-primary="#7c4dff" data-secondary="#7b1fa2"> <div></div></li><li class="color-layout" data-attr="dark-6" data-primary="#3949ab" data-secondary="#4fc3f7"> <div></div></li></ul> <h6 class="">طرح میکس</h6> <ul class="layout-grid customizer-mix"> <li class="color-layout" data-attr="light-only"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-light body"> </li></ul> </div></li><li class="color-layout active" data-attr=""> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"> </li></ul> </div></li><li class="color-layout" data-attr="dark-body-only"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-dark body"> </li></ul> </div></li><li class="color-layout" data-attr="dark-sidebar-body-mix"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-dark body"> </li></ul> </div></li><li class="color-layout" data-attr="dark-header-sidebar-mix"> <div class="header bg-dark"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"> </li></ul> </div></li><li class="color-layout" data-attr="dark-only"> <div class="header bg-dark"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-dark body"> </li></ul> </div></li></ul> </div></div></div></div>').appendTo($('body'));
(function () {})();
//live customizer js
$(document).ready(function () {
	$(".customizer-links").click(function () {
		$(".customizer-contain").addClass("open");
		$(".customizer-links").addClass("open");
	});

	$(".close-customizer-btn").on('click', function () {
		$(".floated-customizer-panel").removeClass("active");
	});

	$(".customizer-contain .icon-close").on('click', function () {
		$(".customizer-contain").removeClass("open");
		$(".customizer-links").removeClass("open");
	});

	$(".customizer-color li").on('click', function () {
		$(".customizer-color li").removeClass('active');
		$(this).addClass("active");
		var color = $(this).attr("data-attr");
		var primary = $(this).attr("data-primary");
		var secondary = $(this).attr("data-secondary");
		localStorage.setItem("color", color);
		localStorage.setItem("primary", primary);
		localStorage.setItem("secondary", secondary);
		localStorage.removeItem("dark");
		$("#color").attr("href", "../assets/css/" + color + ".css");
		$(".dark-only").removeClass('dark-only');
		location.reload(true);
	});

	$(".customizer-color.dark li").on('click', function () {
		$(".customizer-color.dark li").removeClass('active');
		$(this).addClass("active");
		$("body").attr("class", "dark-only");
		localStorage.setItem("dark", "dark-only");
	});


	$(".customizer-mix li").on('click', function () {
		$(".customizer-mix li").removeClass('active');
		$(this).addClass("active");
		var mixLayout = $(this).attr("data-attr");
		$("body").attr("class", mixLayout);
	});


	$('.sidebar-setting li').on('click', function () {
		$(".sidebar-setting li").removeClass('active');
		$(this).addClass("active");
		var sidebar = $(this).attr("data-attr");
		$(".page-sidebar").attr("sidebar-layout", sidebar);
	});

	$('.sidebar-main-bg-setting li').on('click', function () {
		$(".sidebar-main-bg-setting li").removeClass('active')
		$(this).addClass("active")
		var bg = $(this).attr("data-attr");
		$(".page-sidebar").attr("class", "page-sidebar " + bg);
	});

	$('.sidebar-type li').on('click', function () {
		$(".sidebar-type li").removeClass('active');
		var type = $(this).attr("data-attr");

		var boxed = "";
		if ($(".page-wrapper").hasClass("box-layout")) {
			boxed = "box-layout";
		}
		switch (type) {
			case 'normal-sidebar': {
				$(".page-wrapper").attr("class", "page-wrapper " + boxed);
				$(".page-body-wrapper").attr("class", "page-body-wrapper ");
				$(".logo-wrapper").find('img').attr('src', '../assets/images/endless-logo.png');
				break;
			}
			case 'compact-sidebar': {
				$(".page-wrapper").attr("class", "page-wrapper compact-wrapper " + boxed);
				$(".page-body-wrapper").attr("class", "page-body-wrapper sidebar-icon");
				$(".logo-wrapper").find('img').attr('src', '../assets/images/logo/compact-logo.png');
				break;
			}
			case 'compact-icon-sidebar': {
				$(".page-wrapper").attr("class", "page-wrapper compact-page " + boxed);
				$(".page-body-wrapper").attr("class", "page-body-wrapper sidebar-hover");
				$(".logo-wrapper").find('img').attr('src', '../assets/images/endless-logo.png');
				break;
			}
			default: {
				$(".page-wrapper").attr("class", "page-wrapper " + boxed);
				$(".page-body-wrapper").attr("class", "page-body-wrapper ");
				$(".logo-wrapper").find('img').attr('src', '../assets/images/endless-logo.png');
			}
		}
		$(this).addClass("active");
	});

	$('.main-layout li').on('click', function () {
		$(".main-layout li").removeClass('active');
		$(this).addClass("active");
		var layout = $(this).attr("data-attr");
		$("body").attr("main-theme-layout", layout);

		$("html").attr("dir", layout);
	});
});
