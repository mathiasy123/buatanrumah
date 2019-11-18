$(document).ready(function () {
    // Script For Scroll Menu
    function setMenuHeight() {
        let navbarHeight = $(".navbar").outerHeight();

        $(".menu-wrapper").outerHeight(document.documentElement.clientHeight - navbarHeight)
        .niceScroll({
            emulatetouch: true
        });

        console.log(navbarHeight);
    }

    setMenuHeight();

    $(window).on("resize", function () {
        setMenuHeight();
    });

    // Script For Sidebar Menu
    $(".toggler").on("click", function () {
        $(".menu-container").toggleClass("active");
    });

    // Script For Navbar Menu
    $(".nav-toggler").on("click", function () {
        $(".navbar-toggler").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
});