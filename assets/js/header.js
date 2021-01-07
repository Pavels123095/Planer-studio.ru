Jquery(document).ready(function ($){

    Jquery(window).scroll( function () {
        if (Jquery(this).scrollTop() > 0) {
            Jquery('#planer-header').addClass('planer-header-fixed-top');
        } else {
            Jquery('#planer-header').removeClass('planer-header-fixed-top');
        }
    });

});