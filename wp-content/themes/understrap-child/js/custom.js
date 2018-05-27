/* Remove Animation on Small */
$(document).ready(function () {
    if ($(window).width() < 992) {
        $(".lp-row-2").removeClass("slideInUp");
        $(".lp-row-2").addClass("fadeIn");
    }
});

/* Loader Show and Hide */
function showElem() {
    document.getElementById("wrapper-navbar").style.display = "block";
    document.getElementById("content").style.display = "block";
    document.getElementById("loader").style.display = "none";
}
$(document).ready(function() {
    setTimeout(showElem, 2000);
});

/* GMAPS */
function initMap() {
    var location = {lat: 39.276886, lng: -84.336309};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: location,
        disableDefaultUI: true
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}

/* Post Grid */
$(document).ready(function() {
    $(".item").addClass("rounded");
});