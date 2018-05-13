/* Remove Animation on Small */
$(document).ready(function () {
    if ($(window).width() < 992) {
        $(".lp-row-2").removeClass("slideInUp");
        $(".lp-row-2").addClass("fadeIn");
    }
});

function showElem() {
    document.getElementById("wrapper-navbar").style.display = "block";
    document.getElementById("content").style.display = "block";
    document.getElementById("loader").style.display = "none";
}


$(document).ready(function() {
    setTimeout(showElem, 2000);
});