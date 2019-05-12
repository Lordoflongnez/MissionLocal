// Menu button

$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});

// Scroll   
$(window).on("scroll", function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }
    else {
        $('nav').removeClass('black');
    }
}) 

var nav = document.querySelector("#menu");
var navItems = nav.querySelectorAll("li");
var hamburgerButton = nav.querySelector("#hamburger-button");
console.log(navItems);
// We add an event listener for each nav-item
navItems.forEach(function(navItem) {
   navItem.addEventListener("click",activateItem);
});

function activateItem(event) {
   // close the burger menu
   $("nav ul").toggleClass("showing");
}       