jQuery(document).ready(function($) {
    $( '#drop').on( 'click', function(e) {
        e.preventDefault();
        $( '.main-navigation' ).slideToggle();
    });

    function mobile_dropdown_menu(event) {
        if ( "matchMedia" in window ) {
            if ( window.matchMedia( "(max-width:45.7143em)" ).matches ) {
                $( '.main-navigation').hide();
            } else {
                $( '.main-navigation').css( 'display', 'table' );
            }
        }
    }
    window.addEventListener( 'resize', mobile_dropdown_menu, false );
    mobile_dropdown_menu();
});