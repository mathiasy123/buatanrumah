$(document).ready(function () {
    // Script For Scroll Menu
    function setMenuHeight() {

        let navbarHeight = $(".navbar").outerHeight();

        $(".menu-wrapper").outerHeight(document.documentElement.clientHeight - navbarHeight)
        .niceScroll({

            emulatetouch: true
            
        });
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

    // Script For Retrieve File Name
    $(".user-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-user").text(media_source.name);

        document.querySelector(".new-media-user").src = url_media;

    });
    $(".vendor-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-vendor").text(media_source.name);

        document.querySelector(".new-media-vendor").src = url_media;

    });
    $(".video-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-video").text(media_source.name);

        document.querySelector(".new-media-video").src = url_media;

    });
    $(".hero-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-hero").text(media_source.name);

        document.querySelector(".new-media-hero").src = url_media;

    });

    $(".about-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-about").text(media_source.name);

        document.querySelector(".new-media-about").src = url_media;

    });
    $(".food-file").change(function (event) {

        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-food").text(media_source.name);

        document.querySelector(".new-media-food").src = url_media;

    });

    // Close The Nofitication
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {

        $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {

            $notification.parentNode.removeChild($notification);

        });
    });

});