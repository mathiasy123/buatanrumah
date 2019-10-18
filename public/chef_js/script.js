$(document).ready(function () {
    // Script For Navbar Toggle
    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function () {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });

    // Script For Scrollspy
    $(".page-scroll").on("click", function (e) {

        // Ambil id menu yang diklik
        let link = $(this).attr("href");

        // Ambil semua elemen sesuai dengan id menu yang diklik
        let elementHref = $(link);

        // Buat scroll otomatis ke bagian elemen yang sudah di dapatkan
        $("html, body").animate({
            // Kurangi nilai scroll agar pas
            scrollTop: elementHref.offset().top - 70
        }, 800, "swing");

        e.preventDefault();
    });
});

