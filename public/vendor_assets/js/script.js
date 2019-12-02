$(document).ready(function () {
    // Script For Navbar Menu
    $(".navbar-burger").on("click", function () {

        $(this).toggleClass("is-active");

        $(".navbar-menu").toggleClass("is-active");
    });

    // Script For Scroll Menu
    $(".menu-scroll").on("click", function (event) {

        let link = $(this).attr("href");
    
        let elementHref = $(link);

        $("html, body").animate({

            scrollTop: elementHref.offset().top - 70

        }, 800, "swing");
    
        event.preventDefault();
    });
});
