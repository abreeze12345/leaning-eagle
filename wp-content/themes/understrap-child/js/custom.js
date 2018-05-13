/* Remove Animation on Small */
$(document).ready(function () {
    if ($(window).width() < 992) {
        $(".lp-row-2").removeClass("slideInUp");
    }
});