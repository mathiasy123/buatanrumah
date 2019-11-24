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
    $("input[type='file']").change(function (event) {
        let media_source = event.target.files[0];

        let url_media = URL.createObjectURL(media_source);

        $(".file-name-here").text(media_source.name);

        document.querySelector(".new-media").src = url_media;
    });

    // Close The Nofitication
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        $notification = $delete.parentNode;
        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });

});