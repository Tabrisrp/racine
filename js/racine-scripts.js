jQuery(document).ready(function($) {
    function mobile_dropdown_menu(event) {
        if ( "matchMedia" in window ) {
            if ( window.matchMedia( "(max-width:45.7143em)" ).matches ) {
                $( '.main-navigation').hide();
                $( '#drop').on( 'click', function(e) {
                    e.preventDefault();
                    $( '.main-navigation' ).slideToggle();
                });
            } else {
                $( '.main-navigation').css( 'display', 'table' );
            }
        }
    }
    window.addEventListener( 'resize', mobile_dropdown_menu, false );
    mobile_dropdown_menu();
});