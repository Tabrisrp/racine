jQuery(document).ready(function($) {
    $( '#drop').on( 'click', function(e) {
        e.preventDefault();
        $( '.main-navigation' ).slideToggle();
    });

    function mobile_dropdown_menu() {
        if ( "matchMedia" in window ) {
            if ( window.matchMedia( "(max-width:48em)" ).matches ) {
                $( '.main-navigation').hide().removeClass( 'flexbox-h').addClass( 'flexbox-v' );
            } else {
                $( '.main-navigation').show().removeClass( 'flexbox-v').addClass( 'flexbox-h' );
            }
        }
    }
    window.addEventListener( 'resize', mobile_dropdown_menu, false );
    mobile_dropdown_menu();
});