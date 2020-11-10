/** GENERALS */

function toggle() {
    var x = document.getElementById("nav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}

//$(document).ready(function () {
//  $(window).scroll(function () {
//$(".row-fixed.header").css("margin-top", 0 + $(window).scrollTop() * 0.1);
//$(".row-fixed.header").css("transform", "translate3d(0px, " + -($(window).scrollTop() * 0.2).toFixed() + "px, 0px)");
        //$(".row-fixed.header").css("opacity", 1 - $(window).scrollTop() / 2 / $('.row-fixed.header').height());
    //});
//});